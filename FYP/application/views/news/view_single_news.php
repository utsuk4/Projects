<!DOCTYPE html>
<html>
<head>
<title>KrishiWeb</title>
<link href="<?php echo base_url(); ?>assets_1/web/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<!-- <link href="<?php echo base_url(); ?>assets_1/web/css/style.css" type="text/css" rel="stylesheet" media="all">
 --><link href="<?php echo base_url(); ?>assets_1/web/css/component.css" rel="stylesheet" type="text/css"  />
<link href="<?php echo base_url(); ?>assets_1/web///netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_1/web/css/responsiveblog.css">
<link href="<?php echo base_url(); ?>assets_1/web/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url(); ?>assets_1/web/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_1/web/css/caption-hover.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_1/web/css/circle-hover.css" />
<link href="<?php echo base_url(); ?>assets_1/web/css/slider.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url(); ?>assets_1/web/css/style1.css" rel="stylesheet" type="text/css" media="all">
<!-- /css links -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url(); ?>assets_1/web/js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets_1/web/js/modernizr.custom.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>assets_1/web/engine1/jquery.js"></script>


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
	
<script src="<?php echo base_url(); ?>assets_1/web/js/jquery-1.11.1.min.js"></script> 
<script src="<?php echo base_url(); ?>assets_1/web/js/modernizr.custom.js"></script>
<!-- //js -->
</head>
<body  id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
	<div class="banner"> 
		<!--header-->		
		<!-- Fixed navbar -->
  
<!-- /Fixed navbar -->	
	<div class="container" style="margin-top:55px">
		<div class="blog">
			
		<div class="blog-content">
					<div class="blog-content-left">
						<div class="blog-articals">
						<div class="blog-artical">
							<div class="blog-artical-info">
                                                             <?php foreach ($news as $n):?>
								<div class="blog-artical-info-img">
									<a href="<?php echo base_url(); ?>home/viewsingleblog/<?php echo $n['s_no'];?>"><img src="<?php echo base_url();?>/images/news/<?php echo $n['image'];?>" title="post-name"></a>
								</div>
								<div class="blog-artical-info-head">
									<h2><a href="<?php echo base_url(); ?>home/viewsinglenews/<?php echo $n['s_no'];?>"><?php echo $n['n_heading'];?></a></h2>
									
									
								</div>
								<div class="blog-artical-info-text">
									<p><?php echo $n['n_content'];?></p>
								</div>
                                                            <?php     
                                              endforeach;
                                             
                                                ?>
								
							</div>
							<div class="clearfix"> </div>
						</div>
						
						
					</div>
					<!--start-blog-pagenate-->
						
				<!--//End-blog-pagenate-->
					</div>
				
					<div class="clearfix"> </div>
				
				</div>
                    
		
		<!-- /Blog -->
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets_1/web/js/bootstrap.js"> </script>
</body>
</html>