


<!DOCTYPE html>
<html>
<head>
<title>KrishiWeb</title>
<link href="<?php echo base_url();?>assets/web/webcss/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url();?>assets/web/webcss/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/engine1/style.css" />
<link href="<?php echo base_url();?>assets/web/webcss/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>assets/web/webcss/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/webcss/caption-hover.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/webcss/circle-hover.css" />
<link href="<?php echo base_url();?>assets/web/webcss/slider.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>assets/web/webcss/style.css" rel="stylesheet" type="text/css" media="all">
<!-- /css links -->
<link href='<?php echo base_url();?>assets/web/fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url();?>assets/web/fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/web/js/modernizr.custom.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>assets/web/engine1/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/web/js/change_image.js"></script>

<!-- Custom Theme files -->
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
	<div class="banner"> 
		<!--header-->		
		
<!-- /Fixed navbar -->	
	<!--//banner-->
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<h3>Our List</h3>
			<!--light-box-js -->
			<script src="js/jquery.chocolat.js"></script>
			<link rel="stylesheet" href="<?php echo base_url();?>assets/web/webcss/chocolat.css" type="text/css" media="all" charset="utf-8" />
			<!--light-box-files -->
			<script type="text/javascript" charset="utf-8">
			$(function() {
				$('.moments-bottom a').Chocolat();
			});
			</script> 
			<!--//end-gallery js-->

			<div class="row gallery-info">	
                          <?php  foreach($sikshya as $s):?>
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail moments-bottom">
						<a href="<?php echo base_url();?>home/sikshya/<?php echo $s['s_no'];?>" title="">
                                                    <img style="height: 200px;" src="<?php echo base_url();?>images/sikshya/<?php echo $s['image'];?>" width="400px" height="400px" class="img-responsive zoom-img " alt="">				
						</a>						
					
					<div class="caption gallery-caption">
                                            <h5 bgcolor="white"><a href="<?php echo base_url();?>home/sikshya/<?php echo $s['s_no'];?>"><?php echo $s['name'];?></a></h5>
                                 	</div>	
					</div>
                                   
				</div>
                            <?php endforeach;?>
				
				</div>
				<div class="clearfix"> </div>
			</div>	
			   
		</div>
	</div>

	<!--//gallery-->
	<!--footer-->
	
	<!--//footer-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/web/js/bootstrap.js"> </script>
</body>
</html>