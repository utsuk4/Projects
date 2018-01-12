<?php

class Product_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
 
       
    public function addproduct($input) {
                
        $this->db->insert('product', $input);
       
    }
     public function getproducts() {
                
       $query = $this->db->query("select p.*,u.u_contact,u_address,u_name from product p INNER JOIN user u on u.u_no = p.p_postedby ORDER by p.p_id DESC");
        return $query->result_array();
      
    }
    public function getmyproducts($u_no) {
                
       $query = $this->db->query("SELECT * FROM product where p_postedby='$u_no'");
        return $query->result_array();
      
    }
     public function getsingleproductdata($p_id){
                
       $query = $this->db->query("SELECT * FROM product where p_id='$p_id'");
        return $query->result_array();
      
    }
     public function updateproduct($p_id,$input) {
       //  print_r($input);
         //         exit();
         
         $p_name=$input['p_name'];
         $p_image=$input['p_image'];
         $p_rate=$input['p_rate'];
         $p_quantity=$input['p_quantity'];
         
       // $this->db->insert('product', $input);
         $this->db->query("UPDATE product SET p_name='$p_name', p_image='$p_image', p_rate='$p_rate', p_quantity='$p_quantity' WHERE p_id='$p_id'");
       
    }
      
    
    public function deleteproduct($p_id){
        $this->db->query("DELETE FROM product WHERE p_id='$p_id'");
       
    }    
    
}   
?>