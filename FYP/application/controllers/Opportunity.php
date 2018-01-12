<?php

class Opportunity extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->model('Opportunity_model');
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
   public function addopportunity() {
      $data['opportunity'] = $this->Opportunity_model->getopportunity();
        $config['upload_path'] = './images/opportunity/';
       
        
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
                'o_title' => $this->input->post('o_title'),
                'o_description' => $this->input->post('o_description'),
                'image' => $image,
                'o_postedby'=>$postedby,
                //'date' => date('Y-m-d', now())
            );
                $this->Opportunity_model->addopportunity($input);
                 echo "<script type='text/javascript'>
                      alert('added successfully');
                    
                </script>";
              //$data['opportunity'] = $this->Opportunity_model->getopportunity();
              $this->viewopportunity();
         }
         
     }
         else{  
               
                $this->load->view('dashboard/dashHead');
                $this->load->view('opportunity/opportunity_form');
                
            
        }
        
    }
    public function viewopportunity() {
         $sess_data = $this->session->userdata('session_data');
         $u_email=$sess_data['u_email'];
        $data['opportunity'] = $this->Opportunity_model->getmyopportunity($u_email);
         $this->load->view('dashboard/dashHead');
        $this->load->view('opportunity/opportunity_detail', $data);
        
        
    }
  
    /*    public function dashopportunity() {
       // $this->loginCheck();

        $data['opportunity'] = $this->Home_model->getopportunity();
        $data['featuredopportunity'] = $this->Home_model->getAllFeaturedSliderImages();

        $this->load->view('dashboard/dashHead');
        $this->load->view('opportunity/opportunity_form', $data);
    }
     * 
     */
     
    public function deleteopportunity($s_no) {
       // $this->loginCheck();

        $this->Opportunity_model->deleteopportunity($s_no);

        $this->viewopportunity();
    }
    public function editopportunity($s_no) {
       // $this->loginCheck();

        $data['opportunitydata'] = $this->Opportunity_model->getsingleopportunity($s_no);
//        print_r($data); exit;
        $this->load->view('dashboard/dashHead');
        $this->load->view('opportunity/edit_opportunity_form', $data);
    }
     public function updateopportunity($s_no) {
       // $this->loginCheck();

       $data['opportunitydata'] = $this->Opportunity_model->getsingleopportunity($s_no);
        $config['upload_path'] = './images/opportunity/';

        //echo $id; exit;
       if ($_POST) {
            $image = $this->do_upload($config);
             if ($_FILES['image']['size'] == 0) {
                echo "<script type='text/javascript'>
                      alert('Please select an image to upload.');
                      window.location.href='dashopportunity';
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
             $this->Opportunity_model->updateopportunity($s_no,$input);
             //$data['opportunity'] = $this->Opportunity_model->getopportunity();
                $this->viewopportunity();
         }
         
     }
    }
  }
?>