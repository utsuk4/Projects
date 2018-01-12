

<!DOCTYPE html>
<html>
<head>
<title>KrishiWeb</title>
<link href="<?php echo base_url();?>assets/web/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
 <link href="<?php echo base_url();?>assets/web/css/style.css" type="text/css" rel="stylesheet" media="all"> 
 <link href="<?php echo base_url();?>assets/web/css/component.css" rel="stylesheet" type="text/css"  />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/css/responsiveblog.css">
<link href="<?php echo base_url();?>assets/web/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>assets/web/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/css/caption-hover.css" />-->
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/css/circle-hover.css" />-->
 <!--<link href="<?php echo base_url();?>assets/web/css/slider.css" rel="stylesheet" type="text/css" media="all">-->
 <link href="<?php echo base_url();?>assets/web/css/style1.css" rel="stylesheet" type="text/css" media="all">
<!-- /css links 
<link href='<?php echo base_url();?>assets/web/fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url();?>assets/web/fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url();?>assets/web/js/SmoothScroll.min.js"></script>
<script type="<?php echo base_url();?>assets/web/text/javascript" src="js/modernizr.custom.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>assets/web/engine1/jquery.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Krishi Sikshya" />
<script type="application/x-javascript">
	 addEventListener("load", function() 
	 { setTimeout(hideURLbar, 0); 
	 	}, false); 
	 	function hideURLbar()
	 	{ 
	 		window.scrollTo(0,1);
	 	 } 
 </script>

<!-- js -->
	
<script src="<?php echo base_url();?>assets/web/js/jquery-1.11.1.min.js"></script> 
<script src="<?php echo base_url();?>assets/web/js/modernizr.custom.js"></script>
<!-- //js -->
</head>
<body  id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
        <!--<div class="banner"> </div>-->
		<!--header-->		
		
<!-- /Fixed navbar -->	
	<div class="container" style="margin-top:55px">
		<div class="blog">
			
		<div class="container padded">
    <div class="row">
        <div class="col-sm-8 blog">
            <?php foreach ($research as $r):?>
            <section>
                <h1><a href=""><?php echo $r['r_title'];?></a></h1>
               
                
                <hr>
                <img src="<?php echo base_url();?>/images/Adobe_Acrobat_Icon.jpg" class="img-responsive">
                <hr>
                <p><?php echo $r['r_description'];?></p>
                <hr>
            <a class="btn btn-primary" href="#">View</a>   <a class="btn btn-primary" href="<?php echo base_url();?>research/<?php echo $r['r_file'];?>">Download</a>
            </section>
            
            <?php endforeach;?>
            
           <nav>
                                <div class="pagination">
                                    <?php echo $links;?>

                                </div>
                            </nav>
        </div>
       
    </div>    
</div>    
		 <!-- the comment box -->
<!--                <div class="well">
                    <h4><i class="fa fa-paper-plane-o"></i> Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i> Submit</button>
                    </form>
                </div>-->
<script src="<?php echo base_url();?>assets/web/https://apis.google.com/js/plusone.js">
</script>
                <hr>

                <!-- the comments -->
               
            </div>
		</div>
		<!-- /Blog -->
	<!--footer-->
<!-- Footer -->

	
    <div class="footer-bottom">
        <div class="container">
            
            <script>$(function () {
              $('[data-toggle="tooltip"]').tooltip()
            })</script>
        </div>
    </div>
</html>