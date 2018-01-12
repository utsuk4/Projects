<?php

class Comment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Comment_model');
         $this->load->helper('date');
       //    $sess_data = $this->session->userdata('session_data');
       // if ($sess_data['loggedIn'] != 1) {
        //    redirect('User');
        }
      /*  $sess_data = $this->session->userdata('session_data');
        if ($sess_data['loggedIn'] != 1) {
            redirect('login');
        }*/
         
    
    

    public function index() {
       
    }
   public function addcomment($s_no) {
      //  $data['comment'] = $this->Blog_model->getblog();
       // $config['upload_path'] = './images/blog/';
       
        
        if ($_POST) {
           
          //  $sess_data = $this->session->userdata('session_data');
          //  $postedby=$sess_data['u_email'];
            
           // $image = $this->do_upload($config);
                $input = array(
                'comment' => $this->input->post('comment'),
                'blog_no' => $s_no,
                'date' => date('Y-m-d', now())
            );
             $this->Comment_model->addblogcomment($input);
            redirect('Home/viewsingleblog/'.$s_no);
              //$data['blog'] = $this->Blog_model->getblog();
              //  $this->load->view('dashboard/dashHead');
               // $this->load->view('blog/blog_detail',$data);
              
         }
         
     }
     
  }
?>