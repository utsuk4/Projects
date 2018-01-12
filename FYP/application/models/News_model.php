<?php

class News_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
     public function getnews(){
        $query=$this->db->query("SELECT * FROM news");
        return $query->result_array();
    }
    public function getsinglenews($s_no){
        $query=$this->db->query("SELECT * FROM news WHERE s_no='$s_no'");
        return $query->result_array();
    }
    public function getfeaturednews() {
        $query=$this->db->query("SELECT * FROM news where featured=1");
        return $query->result_array();
        
    }
    public function addnews($input){
          if ($input['featured'] != NULL) {
            $featured = 1;
        } else {
            $featured = NULL;
        }
        $n_heading=$input['n_heading'];
        $n_content=$input['n_content'];
        $image=$input['image'];
      //  $postedby=$input['postedby'];
        $date=$input['date'];
        $this->db->query("INSERT INTO news (n_heading,n_content,image,featured,date) VALUES('$n_heading','$n_content','$image','$featured','$date')");
       //  $this->db->query("INSERT INTO news (n_heading,n_content,image,caption,featured) VALUES('$image','$caption','$featured')");
    }
    public function deletenews($s_no) {
        $this->db->query("DELETE FROM news WHERE s_no='$s_no'");
    }
     public function updatenews($s_no,$input) {
       //  print_r($input);
         //         exit();
         if ($input['featured'] != NULL) {
            $featured = 1;
        } else {
            $featured = NULL;
        }
         $n_heading=$input['n_heading'];
         $n_content=$input['n_content'];
         $n_image=$input['image'];
                
       // $this->db->insert('product', $input);
         $this->db->query("UPDATE news SET n_heading='$n_heading', n_content='$n_content', image='$n_image',featured='$featured' WHERE s_no='$s_no'");
       
    }
 
       
   
    
}   
?>