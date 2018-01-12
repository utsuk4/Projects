<?php

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model');
         $this->load->helper('date');
         
           $sess_data = $this->session->userdata('session_data');
        if ($sess_data['loggedIn'] != 1) {
            redirect('User');
        }
      /*  $sess_data = $this->session->userdata('session_data');
        if ($sess_data['loggedIn'] != 1) {
            redirect('login');
        }*/
         
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
            //echo $error;
            //exit;
        } else {
            $data = $this->upload->data();
            return $data['file_name'];
        }
    }

    public function index() {
       
    }
   public function addblog() {
        $data['blog'] = $this->Blog_model->getblog();
        $config['upload_path'] = './images/blog/';
       
        
        if ($_POST) {
            
            $sess_data = $this->session->userdata('session_data');
            $postedby=$sess_data['u_email'];
            
            $image = $this->do_upload($config);
             if ($_FILES['image']['size'] == 0) {
                echo "<script type='text/javascript'>
                      alert('Please select an image to upload.');
                      window.location.href='';
                </script>";
            }
            else {
            $input = array(
                'b_heading' => $this->input->post('b_heading'),
                'b_content' => $this->input->post('b_content'),
                'image' => $image,
                'postedby'=>$postedby,
                'featured' => $this->input->post('featured'),
                'date' => date('Y-m-d', now())
            );
             $this->Blog_model->addblog($input);
              echo "<script type='text/javascript'>
                      alert('added successfully');
                      window.location.href='viewblog';
                </script>";
              //$data['blog'] = $this->Blog_model->getblog();
                $this->load->view('dashboard/dashHead');
                $this->load->view('blog/blog_detail',$data);
         }
         
     }
         else{  
               
                $this->load->view('dashboard/dashHead');
                $this->load->view('blog/blog_form');
                
            
        }
        
    }
    public function viewblog() {
         $sess_data = $this->session->userdata('session_data');
         $u_email=$sess_data['u_email'];
        $data['blog'] = $this->Blog_model->getmyblog($u_email);
         $this->load->view('dashboard/dashHead');
        $this->load->view('blog/blog_detail', $data);
        
        
    }
  
    /*    public function dashblog() {
       // $this->loginCheck();

        $data['blog'] = $this->Home_model->getblog();
        $data['featuredblog'] = $this->Home_model->getAllFeaturedSliderImages();

        $this->load->view('dashboard/dashHead');
        $this->load->view('blog/blog_form', $data);
    }
     * 
     */
     
    public function deleteBlog($s_no) {
       // $this->loginCheck();

        $this->Blog_model->deleteBlog($s_no);

        $this->viewblog();
    }
    public function editblog($s_no) {
       // $this->loginCheck();

        $data['blogdata'] = $this->Blog_model->getsingleblog($s_no);
//        print_r($data); exit;
        $this->load->view('dashboard/dashHead');
        $this->load->view('blog/edit_blog_form', $data);
    }
     public function updateblog($s_no) {
       // $this->loginCheck();

       $data['blogdata'] = $this->Blog_model->getsingleblog($s_no);
        $config['upload_path'] = './images/blog/';

        //echo $id; exit;
       if ($_POST) {
            
            $image = $this->do_upload($config);
             if ($_FILES['image']['size'] == 0) {
                echo "<script type='text/javascript'>
                      alert('Please select an image to upload.');
                      window.location.href='dashblog';
                </script>";
            }
            else {
            $input = array(
                'b_heading' => $this->input->post('b_heading'),
                'b_content' => $this->input->post('b_content'),
                'image' => $image,
                'featured' => $this->input->post('featured'),
                'date' => date('Y-m-d', now())
            );
             $this->Blog_model->updateblog($s_no,$input);
              //$data['blog'] = $this->Blog_model->getblog();
                $this->viewblog();
         }
         
     }
    }
  }
?>