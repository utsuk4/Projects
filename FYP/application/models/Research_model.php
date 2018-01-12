<?php

class Research_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
 
       
    public function addresearch($input) {
                
        $this->db->insert('research', $input);
       
    }
     public function getresearch() {
                
       $query = $this->db->query("SELECT * FROM research");
        return $query->result_array();
      
    }
    public function getmyresearch($u_email) {
                
       $query = $this->db->query("SELECT * FROM research where r_postedby='$u_email'");
        return $query->result_array();
      
    }
    
     public function getpresearch($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("research");
//print_R($query); exit;
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }

            return $data;
        }

        return false;
    }
    
    
   
    
    public function deleteresearch($s_no){
        $this->db->query("DELETE FROM research WHERE s_no='$s_no'");
       
    }    
     public function count_posts() {
        return $this->db->count_all("research");
    }
    
}   
?>