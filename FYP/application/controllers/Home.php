<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->helper("url");
        $this->load->model('Home_model');
        $this->load->model('Blog_model');
        $this->load->model('News_model');
        $this->load->model('User_model');
        $this->load->model('Opportunity_model');
        $this->load->model('Research_model');
        $this->load->model('Comment_model');
        $this->load->model('Product_model');
        $this->load->model('Sikshya_model');
        $this->load->helper('date');
        $sess_data = $this->session->userdata('session_data');
    }

    public function logincheck() {
        $sess_data = $this->session->userdata('session_data');
        if ($sess_data['loggedIn'] != 1) {
            redirect('Home');
        }
    }

    public function index() {
        $data['featuredImages'] = $this->Home_model->getAllFeaturedSliderImages();
        $data['aboutus'] = $this->Home_model->getaboutus();
        $data['featurednews'] = $this->News_model->getfeaturednews();
        $data['featuredgallery'] = $this->Home_model->getfeaturedgallery();
        // $this->load->view('base/header');
        $this->load->view('home/home', $data);
    }

    public function do_upload($config) { //image(file) upload function as extracted from CI user_guide
        $config['allowed_types'] = 'jpg|png|jpeg|gif|mp4';
        $config['max_size'] = 50000000000000000;
//      $config['max_width'] = 1024;
//      $config['max_height'] = 768;
//
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            return $data['file_name'];
        }
    }

    public function slider() {
        $this->logincheck();


        $data['images'] = $this->Home_model->getAllSliderImages();
        $data['featuredImages'] = $this->Home_model->getAllFeaturedSliderImages();

        $this->load->view('dashboard/dashHead');
        $this->load->view('slider/slider_form', $data);
    }

    public function addSliderImage() {
        $this->logincheck();
        $data['images'] = $this->Home_model->getAllSliderImages();
        $config['upload_path'] = './images/slider/';

        if ($_POST) {
            $image = $this->do_upload($config);
            if ($_FILES['image']['size'] == 0) {
                echo "<script type='text/javascript'>
                      alert('Please select an image to upload.');
                      window.location.href='slider';
                </script>";
            } else {
                $imagedata = array(
                    'image' => $image,
                    'featured' => $this->input->post('featured'),
                );

                $this->Home_model->addSliderImage($imagedata);

                $data['images'] = $this->Home_model->getAllSliderImages();
                $this->load->view('dashboard/dashHead');
                $this->load->view('slider/slider_form', $data);
            }
        } else {
            $this->load->view('dashHead');
            $this->load->view('Home/slider_form', $data);
        }
    }

    public function deleteSlider($id) {
        $this->logincheck();

        $this->Home_model->deleteSlider($id);

        $this->slider();
    }

    public function editSliderDisplay($id) {
        $this->logincheck();

        $data['selectedImageData'] = $this->Home_model->getSelectedSliderImageData($id);
//        print_r($data); exit;
        $this->load->view('dashboard/dashHead');
        $this->load->view('slider/edit_slider_form', $data);
    }

    public function editgallery($s_no) {
        $this->logincheck();

        $data['gallerydata'] = $this->Home_model->getgallerydata($s_no);
//        print_r($data); exit;
        $this->load->view('dashboard/dashHead');
        $this->load->view('gallery/edit_gallery_form', $data);
    }

    public function updateSlider($id) {
        $this->logincheck();

        $data['selectedImageData'] = $this->Home_model->getSelectedSliderImageData($id);
        $config['upload_path'] = './images/slider/';
        if ($_POST) {
            if ($_FILES['image']['size'] > 0) {
                $newImage = $this->do_upload($config);
                $newImageData = array(
                    'featured' => $this->input->post('featured'),
                    'image' => $newImage,
                );
            } else {
                $newImageData = array(
                    'featured' => $this->input->post('featured'),
                    'image' => $data['selectedImageData'][0]['image'],
                );
            }

            $this->Home_model->editSlider($newImageData, $id);

            $this->slider();
        }
    }

    public function updategallery($s_no) {
        $this->logincheck();

        $data['gallerydata'] = $this->Home_model->getallgallery();
        $config['upload_path'] = './images/gallery/';
        if ($_POST) {
            if ($_FILES['image']['size'] > 0) {
                $image = $this->do_upload($config);
                $newgallerydata = array(
                    'image' => $image,
                    'caption' => $this->input->post('caption'),
                    'featured' => $this->input->post('featured'),
                );
            } else {
                $newgallerydata = array(
                    'image' => $data['selectedImageData'][0]['image'],
                    'caption' => $this->input->post('caption'),
                    'featured' => $this->input->post('featured'),
                );
            }
            $this->Home_model->editgallery($newgallerydata, $s_no);
            redirect('home/gallery');
        }
    }

    public function blog() {
        $config = array();
        $config["base_url"] = base_url() . "home/blog";
        $total_row = $this->Blog_model->count_posts();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        if ($this->uri->segment(3)) {
            $page = ($this->uri->segment(3));
        } else {
            $page = 1;
        }
        $data["blog"] = $this->Blog_model->getpblog($config["per_page"], $page);
//        print_r($data); exit;
        $data['links'] = $this->pagination->create_links();
//        $data["links"] = explode('&nbsp;', $str_links);
// View data according to array.
//        $data['blog'] = $this->Blog_model->getblog();

        $this->load->view('base/header');
        $this->load->view('blog/blog', $data);
        $this->load->view('base/footer');
    }

    public function product() {
        
        $data['products'] = $this->Product_model->getproducts();
         $this->load->view('base/header');
        $this->load->view('product/product', $data);
         $this->load->view('base/footer');
//  $postedby=$data['products']['p_postedby'];
        //$this->load->view('product/product', $data);
    }

    public function viewsingleblog($s_no) {
        $data['blog'] = $this->Blog_model->getsingleblog($s_no);
        $data['comment'] = $this->Comment_model->getblogcomment($s_no);
        $this->load->view('base/header');
        $this->load->view('blog/view_single_blog', $data);
         $this->load->view('base/footer');
    }
    public function viewsinglenews($s_no) {
        $data['news'] = $this->News_model->getsinglenews($s_no);
      //  $data['comment'] = $this->Comment_model->getblogcomment($s_no);
        $this->load->view('base/header');
        $this->load->view('news/view_single_news', $data);
         $this->load->view('base/footer');
    }

    public function addgallery() {
        $this->logincheck();
        $data['gallerydata'] = $this->Home_model->getallgallery();
        $config['upload_path'] = './images/gallery/';

        if ($_POST) {
            $image = $this->do_upload($config);
            if ($_FILES['image']['size'] == 0) {
                echo "<script type='text/javascript'>
                      alert('Please select an image to upload.');
                      window.location.href='gallery';
                </script>";
            } else {
                $input = array(
                    'image' => $image,
                    'caption' => $this->input->post('caption'),
                    'featured' => $this->input->post('featured'),
                );

                $this->Home_model->addgallery($input);

                $data['gallerydata'] = $this->Home_model->getallgallery();
                $this->load->view('dashboard/dashHead');
                $this->load->view('gallery/gallery_form', $data);
            }
        } else {
            $this->load->view('dashboard/dashHead');
            $this->load->view('gallery/gallery_form', $data);
        }
    }

    public function deletegallery($s_no) {
        $this->logincheck();
        $this->Home_model->deletegallery($s_no);
        $this->gallery();
    }

    public function gallery() {
        $this->logincheck();
        $data['gallerydata'] = $this->Home_model->getallgallery();
        $this->load->view('dashboard/dashHead');
        $this->load->view('gallery/gallery_form', $data);
    }

    public function editaboutus() {
        $this->logincheck();
        $data['aboutus'] = $this->Home_model->getaboutus();
        $this->load->view('dashboard/dashHead');
        $this->load->view('aboutus/editaboutus', $data);
    }

    public function updateaboutus() {
        $this->logincheck();
        if ($_POST) {

            $input = array(
                'aboutus1' => $this->input->post('aboutus1'),
                'aboutus2' => $this->input->post('aboutus2'),
                'aboutus3' => $this->input->post('aboutus3'),
            );

            $this->Home_model->updateaboutus($input);
            $this->aboutus();
        }
    }

    public function aboutus() {
        $this->logincheck();
        $data['aboutus'] = $this->Home_model->getaboutus();
        $this->load->view('dashboard/dashHead');
        $this->load->view('aboutus/aboutus', $data);
    }

    public function sikshya($sikshya = '') {
        if ($sikshya != '') {
            $data['crop']=$this->Sikshya_model->getsingleinfo($sikshya);
             $this->load->view('base/header');
            $this->load->view('sikshya/sikshya', $data);
             $this->load->view('base/footer');
        } else {
            $data['sikshya'] = $this->Sikshya_model->getinfo();
             $this->load->view('base/header');
            $this->load->view('sikshya/sikshya_list',$data);
             $this->load->view('base/footer');
        }
    }

    public function research() {
         $config = array();
        $config["base_url"] = base_url() . "home/research";
        $total_row = $this->Research_model->count_posts();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        if ($this->uri->segment(3)) {
            $page = ($this->uri->segment(3));
        } else {
            $page = 1;
        }
        $data["research"] = $this->Research_model->getpresearch($config["per_page"], $page);
//        print_r($data); exit;
        $data['links'] = $this->pagination->create_links();
       $this->load->view('base/header');
        $this->load->view('research/research', $data);
         $this->load->view('base/footer');
        
        }

    public function opportunity() {
        $data['opportunity'] = $this->Opportunity_model->getopportunity();
         $this->load->view('base/header');
        $this->load->view('opportunity/opportunity', $data);
         $this->load->view('base/footer');
    }

}

?>
