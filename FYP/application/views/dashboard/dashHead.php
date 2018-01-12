<?php
//echo '<pre>';
$session= $this->session->all_userdata(); 
$type = $session['session_data']['u_type'];
//echo $type;exit;
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>DashBoard</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>assets/dashboard/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/dashboard/css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo base_url(); ?>assets/dashboard/css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>assets/dashboard/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <?php $sess_data = $this->session->userdata('session_data');
            
        ?>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>dashboard">KRISHI SIKSHYA RA SAMAADHAN</a>
                <?php if($this->session->flashdata('msg')) { 
                    $flash_data=$this->session->flashdata('msg');
                
                echo "<script>
                alert('".$flash_data."');</script>"; }?>
                
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $sess_data['u_name'];?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo base_url();?>User/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <?php if($type=='admin'){?>
                       
                         <li>
                            <a href="<?php echo base_url(); ?>user/userdetail">Manage Users</a>
                        </li>
                        <?php } ?>

                      <?php if($type=='admin'||$type=='vendor'||$type=='farmer'||$type=='user'){?>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#std"><i class="fa fa-fw fa-arrows-v"></i> Products <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="std" class="collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>product/addproduct">Add Product</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>product/viewproduct">View Product Details</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                          <?php if($type=='expert'||$type=='admin'){?>
                         <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#info"><i class="fa fa-fw fa-arrows-v"></i> Crop Information <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="info" class="collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>sikshya/addinfo">Add Information</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>sikshya/viewinfo">View Information</a>
                                </li>
                            </ul>
                        </li>
                         <?php } ?>
                        
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#blog"><i class="fa fa-fw fa-arrows-v"></i>Blog<i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="blog" class="collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>Blog/addblog">Add Blog</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>Blog/viewblog">View Blog</a>
                                </li>
                            </ul>
                        </li>
                         
                        <?php if($type=='expert'||$type=='admin'){?>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#research"><i class="fa fa-fw fa-arrows-v"></i>Research<i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="research" class="collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>Research/addresearch">Add Research</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>Research/viewresearch">View Research</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                        <?php if($type=='vendor'||$type=='admin'){?>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#depart"><i class="fa fa-fw fa-arrows-v"></i>Opportunity<i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="depart" class="collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>opportunity/addopportunity">Add Opportunity</a>
                                </li>
                                <!--li>
                                    <a href="">View Departments</a>
                                </li-->
                                <li>
                                    <a href="<?php echo base_url(); ?>opportunity/viewopportunity">View Opportunity</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                        <?php if($type=='admin'){?>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#homepage"><i class="fa fa-fw fa-arrows-v"></i> Edit Website<i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="homepage" class="collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>home/slider">Slider</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo base_url(); ?>home/gallery">Gallery</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo base_url(); ?>News/viewnews">News</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>home/Aboutus">About Us</a>
                                </li>
                              

                            </ul>
                        </li>
                        <?php } ?>       
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <!-- jQuery -->
            <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="<?php echo base_url(); ?>assets/dashboard/js/bootstrap.min.js"></script>

            <!-- Morris Charts JavaScript -->
            <script src="<?php echo base_url(); ?>assets/dashboard/js/plugins/morris/raphael.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/dashboard/js/plugins/morris/morris.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/dashboard/js/plugins/morris/morris-data.js"></script>

    </body>

</html>
