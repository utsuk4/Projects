<?php

class Sikshya extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Sikshya_model');
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
   public function addinfo() {
        $config['upload_path'] = './images/sikshya/';
         
        
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
                'name' => $this->input->post('name'),
                'temperature' => $this->input->post('temperature'),
                'sunlight' => $this->input->post('sunlight'),
                'soil_texture' => $this->input->post('soil_texture'),
                'soil_nutrition' => $this->input->post('soil_nutrition'),
                'soil_moisture' => $this->input->post('soil_moisture'),
                'soil_temperature' => $this->input->post('soil_temperature'),
                'prev_crop' => $this->input->post('prev_crop'),
                'compatible_crop' => $this->input->post('compatible_crop'),
                'fertilizer' => $this->input->post('fertilizer'),
                'water' => $this->input->post('water'),
                'note' => $this->input->post('note'),
                'image' => $image,
               
            );
             $this->Sikshya_model->addinfo($input);
              echo "<script type='text/javascript'>
                      alert('added successfully');
                      window.location.href='viewinfo';
                </script>";
              //$data['blog'] = $this->Blog_model->getblog();
                $this->load->view('dashboard/dashHead');
                $this->load->view('sikshya/sikshya_detail',$data);
         }
         
     }
         else{  
               
                $this->load->view('dashboard/dashHead');
                $this->load->view('sikshya/sikshya_form');
                
            
        }
        
    }
    public function viewinfo() {
       //  $sess_data = $this->session->userdata('session_data');
        // $u_email=$sess_data['u_email'];
        
        $data['info'] = $this->Sikshya_model->getinfo();
         $this->load->view('dashboard/dashHead');
        $this->load->view('sikshya/sikshya_detail', $data);
        
        
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
     
    public function deleteinfo($s_no) {
       // $this->loginCheck();

        $this->Sikshya_model->deleteinfo($s_no);

        $this->viewinfo();
    }
    public function editinfo($s_no) {
       // $this->loginCheck();

        $data['singleinfo'] = $this->Sikshya_model->getsingleinfo($s_no);
//        print_r($data); exit;
        $this->load->view('dashboard/dashHead');
        $this->load->view('sikshya/edit_sikshya_form', $data);
    }
     public function updateinfo($s_no) {
       // $this->loginCheck();

     //  $data['singleinfo'] = $this->Blog_model->getsingleinfo($s_no);
        $config['upload_path'] = './images/sikshya/';

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
                 'name' => $this->input->post('name'),
                'temperature' => $this->input->post('temperature'),
                'sunlight' => $this->input->post('sunlight'),
                'soil_texture' => $this->input->post('soil_texture'),
                'soil_nutrition' => $this->input->post('soil_nutrition'),
                'soil_moisture' => $this->input->post('soil_moisture'),
                'soil_temperature' => $this->input->post('soil_temperature'),
                'prev_crop' => $this->input->post('prev_crop'),
                'compatible_crop' => $this->input->post('compatible_crop'),
                'fertilizer' => $this->input->post('fertilizer'),
                'water' => $this->input->post('water'),
                'note' => $this->input->post('note'),
                'image' => $image,
               
            );
             $this->Sikshya_model->updateinfo($s_no,$input);
              //$data['blog'] = $this->Blog_model->getblog();
                $this->viewinfo();
         }
         
     }
    }
  }
?>