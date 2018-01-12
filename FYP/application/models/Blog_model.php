<?php

class Blog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getblog() {
        $query = $this->db->query("SELECT * FROM blog");
        return $query->result_array();
    }

    public function getpblog($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("blog");
//print_R($query); exit;
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    public function getmyblog($u_email) {
        $query = $this->db->query("SELECT * FROM blog WHERE postedby='$u_email'");
        return $query->result_array();
    }

    public function getsingleblog($s_no) {
        $query = $this->db->query("SELECT * FROM blog WHERE s_no='$s_no'");
        return $query->result_array();
    }

    public function addblog($input) {
        if ($input['featured'] != NULL) {
            $featured = 1;
        } else {
            $featured = NULL;
        }
        $b_heading = $input['b_heading'];
        $b_content = $input['b_content'];
        $image = $input['image'];
        $postedby = $input['postedby'];
        $date = $input['date'];
        $this->db->query("INSERT INTO blog (b_heading,b_content,image,featured,postedby,date) VALUES('$b_heading','$b_content','$image','$featured','$postedby','$date')");
        //  $this->db->query("INSERT INTO blog (b_heading,b_content,image,caption,featured) VALUES('$image','$caption','$featured')");
    }

    public function deleteBlog($s_no) {
        $this->db->query("DELETE FROM blog WHERE s_no='$s_no'");
    }

    public function updateblog($s_no, $input) {
        //  print_r($input);
        //         exit();

        $b_heading = $input['b_heading'];
        $b_content = $input['b_content'];
        $b_image = $input['image'];

        // $this->db->insert('product', $input);
        $this->db->query("UPDATE blog SET b_heading='$b_heading', b_content='$b_content', image='$b_image' WHERE s_no='$s_no'");
    }

    public function count_posts() {
        return $this->db->count_all("blog");
    }

}

?>