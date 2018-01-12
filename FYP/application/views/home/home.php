
<!DOCTYPE html>
<html>
<head>
<title>Krishi Shikshya</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/engine1/style.css" />
<link href="<?php echo base_url();?>assets/web/webcss/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>assets/web/webcss/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/webcss/caption-hover.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/webcss/circle-hover.css" />
<link href="<?php echo base_url();?>assets/web/webcss/slider.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>assets/web/webcss/style.css" rel="stylesheet" type="text/css" media="all">
<!-- /css links -->
<link href='<?php echo base_url();?>assets/web/fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo base_url();?>assets/web/engine1/jquery.js"></script>
<link href='<?php echo base_url();?>assets/web/fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url();?>assets/web/js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/web/js/modernizr.custom.js"></script> 
<script type="text/javascript ">
//$(document).ready(function(){
    
   // $('#myModal').modal('show');
//});
</script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Fixed navbar -->
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>">Krishi Sikshya ra Samaadhan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#news">Recent News</a></li>
                <li><a href="Home/opportunity">Opportunities</a></li>
                <li><a href="Home/research">Research Center</a></li>
                <li><a href="Home/sikshya">Shikshya</a></li>
                <li><a href="Home/product">Products</a></li>
                <li><a href="Home/blog">Blog</a></li>
                <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-user"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white" >Log In </h4>
      </div>
      <div class="modal-body">
      
      
        <form class="form-horizontal" enctype='multipart/form-data' action='<?php echo base_url(); ?>User/login' method='post'>
<!--             <div class="alert alert- alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  
 
</div>-->
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="color:white" >Email</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" style="color:white" name="u_email" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:white">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" style="color:white" name="u_password"  required="">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    
    </div>
    
  </div>
</form>
<div class="modal-footer">
       Don't have an account ? <a href="#myModal1" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">Sign up</a>
</div>


      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white" >Sign Up </h4>
      </div>
      <div class="modal-body">
      
      
        <form class="form-horizontal" enctype='multipart/form-data' action='<?php echo base_url(); ?>User/register' method='post'>
<!--             <div class="alert alert- alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  
 
</div>-->
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="color:white" >Email</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" style="color:white" name="u_email" required="">
    </div>
  </div>
 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:white">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" style="color:white" name="u_password"  required="">
    </div>
  </div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label" style="color:white" >Name</label>
    <div class="col-sm-10">
        <input type="" class="form-control" id="" placeholder="Name" style="color:white" name="u_name" required="">
    </div>
  </div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label" style="color:white" >Contact</label>
    <div class="col-sm-10">
        <input type="" class="form-control" id="" placeholder="Contact" style="color:white" name="u_contact" required="">
    </div>
  </div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label" style="color:white" >Address</label>
    <div class="col-sm-10">
        <input type="" class="form-control" id="" placeholder="Address" style="color:white" name="u_address" required="">
    </div>
  </div>
 <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign Up</button>
    
    </div>
    
  </div>
 
  
  
</form>



      </div>
    </div>
  </div>
</div>
<!-- Banner -->
<div id="wowslider-container1">
    <div class="ws_images"><ul>
            <?php foreach($featuredImages as $s):?>
            <li><img src="<?php echo base_url();?>images/slider/<?php echo $s['image'];?>" alt="" title="" id=""/></li>
            <?php endforeach;?>
       
    </ul></div>
    
    <div class="ws_shadow"></div>
    </div>  
    <script type="text/javascript" src="<?php echo base_url();?>assets/web/engine1/wowslider.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/web/engine1/script.js"></script>
    <!--//banner-->
<!-- /Banner -->
<!-- About -->
<section class="about-us" id="about">
	<h3 class="text-center slideanim">About Us</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-4  slideanim">
                <p><?php echo $aboutus[0]['aboutus1'];?></p>
            </div>
            <div class="col-lg-4 slideanim">
                <p><?php echo $aboutus[0]['aboutus2'];?></p>
            </div>
            <div class="col-lg-4 slideanim">
                <p><?php echo $aboutus[0]['aboutus3'];?></p>
            </div>
        </div>
    </div>
</section>

<!-- /About -->
<!-- /Services -->

<!-- /Services -->

<!-- Portfolio Modals -->





<!-- /Portfolio Modals -->
<!-- Blog -->
<section class="our-blog" id="news">
	<h3 class="text-center slideanim">Recent News</h3>
    <div class="container">
		<div class="row">
                     <?php $count=0;?>
                   <?php foreach ($featurednews as $f):?>
                    <?php if($count<4){?>
                   
                    
			<div class="col-md-3 col-xs-12">
				<div class="view view-seventh slideanim">
                                  <a href="<?php echo base_url(); ?>home/viewsinglenews/<?php echo $f['s_no']; ?>">  <img src="<?php echo base_url();?>images/news/<?php echo $f['image'];?>" height="250" width="250"alt="" class="img-responsive"/></a>
                    <div class="mask">
                        <h5><?php echo $f['date'];?></h5>
                       <p><?php echo $f['n_heading'];?></p></a>				
                    </div>
                </div>
				<div class="blog-content slideanim">
					<p class="p1"><?php echo $f['date'];?></p>
					<a href="<?php echo base_url(); ?>home/viewsinglenews/<?php echo $f['s_no']; ?>"><h4><?php echo $f['n_heading'];?></h4></a>
					
				</div>
			</div>
                    
                    <?php $count++;?>
                    <?php }?>
                    <?php endforeach;?>
                    
                    
			
			
			
		</div>
	</div>
</section>
<section class="our-blog" id="gallery">
	<h3 class="text-center slideanim">Our Gallery</h3>
    <div class="container">
		<div class="row">
                     <?php $count=0;?>
                   <?php foreach ($featuredgallery as $g):?>
                    <?php if($count<4){?>
                   
                    
			<div class="col-md-3 col-xs-12">
				<div class="view view-seventh slideanim">
                                    <img src="<?php echo base_url();?>images/gallery/<?php echo $g['image'];?>" height="250px" width="250px" alt="" class="img-responsive"/>
                    <div class="mask">
                        <h5><?php echo $g['caption'];?></h5>
                        
						
                    </div>
                </div>
				
			</div>
                    
                    <?php $count++;?>
                    <?php }?>
                    <?php endforeach;?>
                    
                    
			
			
			
		</div>
	</div>
</section>

<!-- /Blog -->

<!-- /Contact-Form -->
<!-- Footer -->
<footer class="text-center slideanim slide">
<div class="footer-above">
        <div class="container">
            <div class="row">
                
                <div class="footer-col col-md-6">
                    <h4>Around the Web</h4>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-6">
                    <h4>About Krishi Shikshya Ra Samaadhan</h4>
                    <p>Krishi Shikshya is a enhanced platform for farmers and agricultural experts to communicate for making and enhancing better agricultural techniques</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© 2016 Shikshya Ra Samaadhan. All Rights Reserved </p>
                </div>
            </div>
        </div>
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
    </div>
</footer>
    <div class="footer-bottom">
        <div class="container">
            
            <script>$(function () {
              $('[data-toggle="tooltip"]').tooltip()
            })</script>
        </div>
    </div>

<!-- js files -->
<script src="<?php echo base_url();?>assets/web/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/web/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/web/js/classie.js"></script>
<script src="<?php echo base_url();?>assets/web/js/TweenMax.min.js"></script>
<script src="<?php echo base_url();?>assets/web/js/index.js"></script>
<script src="<?php echo base_url();?>assets/web/js/index2.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top,
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js files -->
</body>
</html>


