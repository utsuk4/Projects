<?php

class Research extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Research_model');
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
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 50000000000000000;
//      $config['max_width'] = 1024;
//      $config['max_height'] = 768;
//
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('r_file')) {
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
   public function addresearch() {
       // $data['research'] = $this->Research_model->getresearch();
        $config['upload_path'] = './research';
       
        
        if ($_POST) {
            
            $sess_data = $this->session->userdata('session_data');
            $r_postedby=$sess_data['u_email'];
            
            $r_file = $this->do_upload($config);
             if ($_FILES['r_file']['size'] == 0) {
                echo "<script type='text/javascript'>
                      alert('Please select a file to upload.');
                      window.location.href='';
                </script>";
            }
            else {
            $input = array(
                'r_title' => $this->input->post('r_title'),
                'r_description' => $this->input->post('r_description'),
                'r_file' => $r_file,
                'r_postedby'=>$r_postedby,
            );
             $this->Research_model->addresearch($input);
              echo "<script type='text/javascript'>
                      alert('added successfully');
                      window.location.href='viewresearch';
                </script>";
              //$data['research'] = $this->Research_model->getresearch();
                $this->load->view('dashboard/dashHead');
                $this->load->view('research/research_detail',$data);
         }
         
     }
         else{  
               
                $this->load->view('dashboard/dashHead');
                $this->load->view('research/research_form');
                
            
        }
        
    }
    public function viewresearch() {
         $sess_data = $this->session->userdata('session_data');
         $u_email=$sess_data['u_email'];
        $data['research'] = $this->Research_model->getmyresearch($u_email);
         $this->load->view('dashboard/dashHead');
        $this->load->view('research/research_detail', $data);
        
        
    }
  
    /*    public function dashresearch() {
       // $this->loginCheck();

        $data['research'] = $this->Home_model->getresearch();
        $data['featuredresearch'] = $this->Home_model->getAllFeaturedSliderImages();

        $this->load->view('dashboard/dashHead');
        $this->load->view('research/research_form', $data);
    }
     * 
     */
     
    public function deleteResearch($s_no) {
       // $this->loginCheck();

        $this->Research_model->deleteResearch($s_no);

        $this->viewresearch();
    }
   
  
  }
?>