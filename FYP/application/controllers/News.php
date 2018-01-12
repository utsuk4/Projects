<?php

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('News_model');
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
   public function addnews() {
        $data['news'] = $this->News_model->getnews();
        $config['upload_path'] = './images/news/';
       
        
        if ($_POST) {
            
            //S$sess_data = $this->session->userdata('session_data');
           // $postedby=$sess_data['u_email'];
            
            $image = $this->do_upload($config);
             if ($_FILES['image']['size'] == 0) {
                echo "<script type='text/javascript'>
                      alert('Please select an image to upload.');
                      window.location.href='';
                </script>";
            }
            else {
            $input = array(
                'n_heading' => $this->input->post('n_heading'),
                'n_content' => $this->input->post('n_content'),
                'image' => $image,
               // 'postedby'=>$postedby,
                'featured' => $this->input->post('featured'),
                'date' => date('Y-m-d', now())
            );
             $this->News_model->addnews($input);
              echo "<script type='text/javascript'>
                      alert('added successfully');
                      window.location.href='viewnews';
                </script>";
              //$data['news'] = $this->News_model->getnews();
                $this->load->view('dashboard/dashHead');
                $this->load->view('news/news_detail',$data);
         }
         
     }
         else{  
               
                $this->load->view('dashboard/dashHead');
                $this->viewnews();
                
            
        }
        
    }
    public function viewnews() {
        // $sess_data = $this->session->userdata('session_data');
        // $u_email=$sess_data['u_email'];
        $data['news'] = $this->News_model->getnews();
         $this->load->view('dashboard/dashHead');
        $this->load->view('news/news_detail', $data);
        
        
    }
  
    /*    public function dashnews() {
       // $this->loginCheck();

        $data['news'] = $this->Home_model->getnews();
        $data['featurednews'] = $this->Home_model->getAllFeaturedSliderImages();

        $this->load->view('dashboard/dashHead');
        $this->load->view('news/news_form', $data);
    }
     * 
     */
     
    public function deleteNews($s_no) {
       // $this->loginCheck();

        $this->News_model->deleteNews($s_no);

        $this->viewnews();
    }
    public function editnews($s_no) {
       // $this->loginCheck();

        $data['newsdata'] = $this->News_model->getsinglenews($s_no);
//        print_r($data); exit;
        $this->load->view('dashboard/dashHead');
        $this->load->view('news/edit_news', $data);
    }
     public function updatenews($s_no) {
       // $this->loginCheck();

       $data['newsdata'] = $this->News_model->getsinglenews($s_no);
        $config['upload_path'] = './images/news/';

        //echo $id; exit;
       if ($_POST) {
            
            $image = $this->do_upload($config);
             if ($_FILES['image']['size'] == 0) {
                echo "<script type='text/javascript'>
                      alert('Please select an image to upload.');
                      window.location.href='';
                </script>";
            }
            else {
            $input = array(
                'n_heading' => $this->input->post('n_heading'),
                'n_content' => $this->input->post('n_content'),
                'image' => $image,
                'featured' => $this->input->post('featured'),
               // 'date' => date('Y-m-d', now())
            );
             $this->News_model->updatenews($s_no,$input);
              //$data['news'] = $this->News_model->getnews();
                $this->viewnews();
         }
         
     }
    }
  }
?>