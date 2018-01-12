    <?php

class Home_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllSliderImages() {
        $query = $this->db->query("SELECT * FROM mainslider");
        return $query->result_array();
    }

    public function getAllFeaturedSliderImages() {
        $query = $this->db->query("SELECT * FROM mainslider WHERE featured=1");
        return $query->result_array();
    }

    public function getSelectedSliderImageData($id) {
        $query = $this->db->query("SELECT * FROM mainslider WHERE id='$id'");
        return $query->result_array();
    }
      public function getgallerydata($s_no) {
        $query = $this->db->query("SELECT * FROM photogallery WHERE s_no='$s_no'");
        return $query->result_array();
    }

    public function addSliderImage($imagedata) {
        if ($imagedata['featured'] != NULL) {
            $featured = 1;
        } else {
            $featured = NULL;
        }
        $image = $imagedata['image'];

        $this->db->query("INSERT INTO mainslider (image,featured) VALUES('$image','$featured')");
    }

    public function deleteSlider($id) {
        $this->db->query("DELETE FROM mainslider WHERE id='$id'");
    }

    public function editSlider($newImageData, $id) {
        if ($newImageData['featured'] != NULL) {
            $featured = 1;
        } else {
            $featured = NULL;
        }

        $image = $newImageData['image'];

        $this->db->query("UPDATE mainslider SET featured='$featured', image='$image' WHERE id='$id'");
    }
    public function editgallery($newgallerydata, $s_no) {
        if ($newgallerydata['featured'] != NULL) {
            $featured = 1;
        } else {
            $featured = NULL;
        }

        $image = $newgallerydata['image'];
        $caption=$newgallerydata['caption'];

        $this->db->query("UPDATE photogallery SET image='$image',caption='$caption',featured='$featured' WHERE s_no='$s_no'");
    }

  
   
    
    public function getallgallery(){
        $query=$this->db->query("SELECT * FROM photogallery");
        return $query->result_array();
    }
    public function getfeaturedgallery(){
        $query=$this->db->query("SELECT * FROM photogallery WHERE featured=1");
        return $query->result_array();
    }
    
    public function addgallery($input){
         if ($input['featured'] != NULL) {
            $featured = 1;
        } else {
            $featured = NULL;
        }
        $image = $input['image'];
        $caption=$input['caption'];
        // $this->db->insert('photogallery', $input);
         $this->db->query("INSERT INTO photogallery (image,caption,featured) VALUES('$image','$caption','$featured')");
    }
    
    public function deletegallery($s_no){
        $this->db->query("DELETE FROM photogallery WHERE s_no='$s_no'"); 
    }
    
    public function getblog(){
        $query=$this->db->query("SELECT * FROM blog");
        return $query->result_array();
    }
    public function getsingleblog($s_no){
        $query=$this->db->query("SELECT * FROM blog WHERE s_no='$s_no'");
        return $query->row_array();
    }
     public function addblog($input){
          if ($input['featured'] != NULL) {
            $featured = 1;
        } else {
            $featured = NULL;
        }
        $this->db->insert('blog', $input);
       //  $this->db->query("INSERT INTO blog (b_heading,b_content,image,caption,featured) VALUES('$image','$caption','$featured')");
    }
    public function deleteBlog($s_no) {
        $this->db->query("DELETE FROM blog WHERE s_no='$s_no'");
    }
     public function aboutus($input){
        $this->db->insert('aboutus',$input);
    }
    public function getaboutus(){
        $query = $this->db->query("SELECT * FROM aboutus");
        return $query->result_array();
    }
    public function updateaboutus($input){
   // echo $aboutus;
   
        $aboutus1=$input['aboutus1'];
        $aboutus2=$input['aboutus2'];
        $aboutus3=$input['aboutus3'];
      
         $this->db->query("UPDATE aboutus SET aboutus1='$aboutus1',aboutus2='$aboutus2',aboutus3='$aboutus3' WHERE s_no=1");
        
    }
    

    
}

?>