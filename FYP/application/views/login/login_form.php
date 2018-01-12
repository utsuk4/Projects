<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title;?></title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/bootstrap.min.css">
</head>
<body>
  
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3" style="background:#ccc;padding:3% 2%;">
<form class="form-horizontal" method="post" action="<?php echo base_url();?>User/login">
<fieldset>
<!--#######Display Your error message inbetween########-->
<legend style="text-align:center;">User Login Form</legend>

 <div class="alert alert-<?php echo $this->session->flashdata('class');?> alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  
 <?php echo $this->session->flashdata('msg');?>
  <?php echo validation_errors();?>
</div>

<!--#######Display Your error message inbetween########-->
<!-- Text input-->
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Email Address</label>  
  <div class="col-md-6">
      <input id="" name="u_email" placeholder="" class="form-control input-md" type="email">
    <!-- <span class="text-danger">Enter your Full Name Here</span> -->
</button>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Password</label>
  <div class="col-md-6">
    <input id="" name="u_password" placeholder="" class="form-control input-md" type="password">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <div class="col-md-8 col-md-offset-4">
    <button id="button1id" name="button1id" class="btn btn-lg btn-success">Submit</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>