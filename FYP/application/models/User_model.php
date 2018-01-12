<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check($logindata){
        $email = $logindata['email'];
        $password = $logindata['password'];
       // $type = $logindata['type'];

        $query = $this->db->query("SELECT * FROM user WHERE u_email='$email' AND u_password='$password'");

        $data = $query->row();
 
        if (count($data) == 1) {
            return $data;
        } else {
            return FALSE;
        }
        
    }
    public function signup($input){
            $this->db->insert('user',$input);
            $this->session->set_flashdata('msg',"Registration Successfull , Please login to continue");
        }
     public function getall(){
            $query = $this->db->query("SELECT * FROM user");
           return $query->result_array();
           
        }
    public function deleteuser($u_no){
        $this->db->query("DELETE FROM user WHERE u_no='$u_no'");
       
    } 
    public function updateuser($u_no,$input) {
        $u_type=$input['u_type'];
         if ($input['u_status'] != NULL) {
            $u_status = 1;
        } else {
            $u_status = NULL;
        }
         $this->db->query("UPDATE user SET u_type='$u_type',u_status='$u_status' WHERE u_no='$u_no'");
    }
    public function getinfo($postedby){
       $query = $this->db->query("SELECT u_contact,u_address FROM user where u_email='$postedby'");
           return $query->result_array();  
    }
    
}
?>

