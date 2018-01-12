<?php

class Dashboard extends CI_Controller {

   public function __construct() {
        parent::__construct();
   //     $this->load->library('form_validation'); 
          $sess_data = $this->session->userdata('session_data');
        if ($sess_data['loggedIn'] != 1) {
            redirect('User');
        }
        
   }

    public function index() {
        

        $this->load->view('dashboard/dashhead');
       
    }

}   
    
?>
