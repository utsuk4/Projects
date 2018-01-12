<?php

class Comment_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
     public function getblogcomment($s_no){
        $query=$this->db->query("SELECT * FROM comment WHERE blog_no='$s_no'");
        return $query->result_array();
    }
     public function addblogcomment($input){
         
        $this->db->insert('comment', $input);
       
    }
    
    
    
  
}   
?>