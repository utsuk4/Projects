<?php

class Sikshya_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
     public function getinfo(){
        $query=$this->db->query("SELECT * FROM sikshya");
        return $query->result_array();
    }
   
     public function getsingleinfo($s_no){
        $query=$this->db->query("SELECT * FROM sikshya WHERE s_no='$s_no'");
        return $query->result_array();
    }
   
   
     public function addinfo($input){
         
       $this->db->insert('sikshya', $input);
    }
    public function deleteinfo($s_no) {
        $this->db->query("DELETE FROM sikshya WHERE s_no='$s_no'");
    }
     public function updateinfo($s_no,$input) {
         
         $this->db->where('s_no',$s_no);
         $this->db->set($input);
         $this->db->update('sikshya');
       
    }
 
       
   
    
}   
?>