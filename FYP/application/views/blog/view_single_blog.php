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
                                                             <?php foreach ($blog as $b):?>
								<div class="blog-artical-info-img">
									<a href="<?php echo base_url(); ?>home/viewsingleblog/<?php echo $b['s_no'];?>"><img src="<?php echo base_url();?>/images/blog/<?php echo $b['image'];?>" title="post-name"></a>
								</div>
								<div class="blog-artical-info-head">
									<h2><a href="<?php echo base_url(); ?>home/viewsingleblog/<?php echo $b['s_no'];?>"><?php echo $b['b_heading'];?></a></h2>
									<h6>Posted on, <?php echo $b['date'];?> by <a href="<?php echo base_url(); ?>assets_1/web/#"> admin</a></h6>
									
								</div>
								<div class="blog-artical-info-text">
									<p><?php echo $b['b_content'];?></p>
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
		</div>
		 <!-- the comment box -->
                 <?php $count=1;?>
                 <?php foreach ($comment as $c):?>
                  <div class="well">
                   
                Comment<?php echo $count;?>(<?php echo $c['date'];?>): <?php echo $c['comment'];?>
                  <?php $count++;?>
                  </div>
                 <?php endforeach;?>
                <div class="well">
                    <h4><i class="fa fa-paper-plane-o"></i> Leave a Comment:</h4>
                    <form role="form" method="post" action="<?php echo base_url(); ?>comment/addcomment/<?php echo $blog[0]['s_no'];?>">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i> Submit</button>
                    </form>
                </div>
<script src="<?php echo base_url(); ?>assets_1/web/https://apis.google.com/js/plusone.js">
</script>
                <hr>

              
            </div>
		</div>
		<!-- /Blog -->
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets_1/web/js/bootstrap.js"> </script>
</body>
</html>