<?php

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
       $sess_data = $this->session->userdata('session_data');
        if ($sess_data['loggedIn'] != 1) {
            redirect('User');
        }
         
    }

    public function index() {
        $this->load->view('dashboard/dashHead');
    }
    public function do_upload($config) { //image(file) upload function as extracted from CI user_guide
        $config['allowed_types'] = 'jpg|png|jpeg|gif|mp4';
        $config['max_size'] = 50000000000000000;
//      $config['max_width'] = 1024;
//      $config['max_height'] = 768;
//
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            //echo $error;
            //exit;
        } else {
            $data = $this->upload->data();
            return $data['file_name'];
        }
    }
    public function addproduct() {
        
       $this->load->view('dashboard/dashHead');
       // $data['product'] = $this->Product_model->getmyproducts();
     
        $this->load->view('product/add_product_form');
         $config['upload_path'] = './images/products/';
        
     // print_r($data); exit;
       if ($_POST) {
            $sess_data = $this->session->userdata('session_data');
//            print_r($sess_data); exit;
            $postedby=$sess_data['u_no'];
           $image = $this->do_upload($config);
             if ($_FILES['image']['size'] == 0) {
                echo "<script type='text/javascript'>
                      alert('Please select an image to upload.');
                      window.location.href='';
                </script>";
            }
       else {
            $input = array(
                'p_name' => $this->input->post('p_name'),
                'p_image' => $image,
                'p_postedby' =>$postedby,// $this->input->post('p_postedby'),
                'p_rate' => $this->input->post('p_rate'),
                'p_quantity'=>$this->input->post('p_quantity'),
            );

            $this->Product_model->addproduct($input);
             echo "<script type='text/javascript'>
                      alert('added successfully');
                      window.location.href='viewproduct';
                </script>";
            // $this->load->view('dashboard/dashHead');
             //$this->load->view('product/blog_detail',$data);
        }
         
                // end of else
        
        }
    }
     public function updateproduct($p_id) {
      // $this->load->view('dashboard/dashHead');
       // $data['product'] = $this->Product_model->getmyproducts();
      
       // $this->load->view('product/add_product_form');
         $config['upload_path'] = './images/products/';
        
     // print_r($data); exit;
       if ($_POST) {
           $image = $this->do_upload($config);
             if ($_FILES['image']['size'] == 0) {
                echo "<script type='text/javascript'>
                      alert('Please select an image to upload.');
                      window.location.href='';
                </script>";
            }
       else {
            $input = array(
                'p_name' => $this->input->post('p_name'),
                'p_image' => $image,
               // 'p_postedby' =>// $this->input->post('p_postedby'),
                'p_rate' => $this->input->post('p_rate'),
                'p_quantity'=>$this->input->post('p_quantity'),
            );

            $this->Product_model->updateproduct($p_id,$input);
             echo "<script type='text/javascript'>
                      alert('Updated successfully');
                      window.location.href='viewproduct';
                </script>";
            
        }

      }
                // end of else
        $this->viewproduct();
        
    }
    public function editproduct($p_id) {
       // $this->loginCheck();

        $data['singleproductdata'] = $this->Product_model->getsingleproductdata($p_id);

        //print_r($data); exit;
        $this->load->view('dashboard/dashHead');
        $this->load->view('product/edit_product_form', $data);

     /*   if ($_POST) {
            $newproductdata = array(
                'p_name' => $this->input->post('p_name'),
                'image' => $image,
                //'p_postedby' => //$this->input->post('p_postedby'),
                'p_rate' => $this->input->post('p_rate'),
                'p_quantity'=>$this->input->post('p_quantity'),
            );
            $this->Product_model->updateproduct($newproductdata, $p_id);
            redirect('product/product');
        }*/
    }

    public function deleteproduct($p_id) {

        $this->Product_model->deleteproduct($p_id);
        $this->viewproduct();
    }
    public function viewproduct(){
         $sess_data = $this->session->userdata('session_data');
         $u_no=$sess_data['u_no'];
        $data['product']=  $this->Product_model->getmyproducts($u_no);
        $this->load->view('dashboard/dashHead');
        $this->load->view('product/view_own_product',$data);
    }

}

?>