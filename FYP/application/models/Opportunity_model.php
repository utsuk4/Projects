<?php

class Opportunity_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
 
       
    public function addopportunity($input) {
                
        $this->db->insert('opportunity', $input);
       
    }
     public function getopportunity() {
                
       $query = $this->db->query("SELECT * FROM opportunity");
        return $query->result_array();
      
    }
    public function getmyopportunity($u_email) {
                
       $query = $this->db->query("SELECT * FROM opportunity where o_postedby='$u_email'");
        return $query->result_array();
      
    }
    
  
    public function deleteopportunity($s_no){
        $this->db->query("DELETE FROM opportunity WHERE s_no='$s_no'");
       
    }    
    
}   
?>