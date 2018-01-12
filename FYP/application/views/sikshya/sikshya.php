

<!DOCTYPE html>
<html>
<head>
<title>KrishiWeb</title>
<link href="<?php echo base_url();?>assets/web/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url();?>assets/web/css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/css/dropdown_shikshya.css">
<link href="<?php echo base_url();?>assets/web/css/component.css" rel="stylesheet" type="text/css"  />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/webengine1/style.css" />
<link href="<?php echo base_url();?>assets/web/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>assets/web/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/css/caption-hover.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/css/circle-hover.css" />
<link href="<?php echo base_url();?>assets/web/css/slider.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>assets/web/css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- /css links -->
<link href='<?php echo base_url();?>assets/web/fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url();?>assets/web/fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url();?>assets/web/js/SmoothScroll.min.js"></script>
<script type="js/dropdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/web/<?php echo base_url();?>assets/web/js/modernizr.custom.js"></script> 
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
<!--<script>
	$(document).ready(function(){
	var arr=['farm3.jpg','farm2.jpg','farm1.jpg'];
	var i = 0;
	$('#clickme1').click(function(){
		$('#image1').attr('src','images/'+arr[i++]);
		if(i>arr.length-1){
			i=0;
		}
	});
});

	$(document).ready(function(){
	var arr=['farm3.jpg','farm2.jpg','farm1.jpg',];
	var i = 0;
	$('#clickme2').click(function(){
		$('#image2').attr('src','images/'+arr[i++]);
		if(i>arr.length-1){
			i=0;
		}
	});
});
</script>-->

	
<script src="<?php echo base_url();?>assets/web/js/jquery-1.11.1.min.js"></script> 
<script>
$(document).ready(function(){
    $("#flip1").click(function(){
        $("#panel1").slideToggle("slow");
    });
	$("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
	$("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
    });
	$("#flip4").click(function(){
        $("#panel4").slideToggle("slow");
    });
	$("#flip5").click(function(){
        $("#panel5").slideToggle("slow");
    });
});
</script>
<script src="<?php echo base_url();?>assets/web/js/modernizr.custom.js"></script>
<!-- //js -->
</head>
<body  id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
	<div class="banner"> 
		<!--header-->		
		<!-- Fixed navbar -->

<!-- /Fixed navbar -->	
	<!--contact-->
	<div class="content-section-b">
	<div class="container">
		<div class="row">
			<div class="container">
    <h2><?php echo $crop[0]['name'];?></h2>
    <p class="lead"><?php echo $crop[0]['note'];?></p>
    <div class="row">
        <div class="col-sm-3">
            <a href="<?php echo base_url();?>assets/web/web#" class="nav-tabs-dropdown btn btn-block btn-primary nav-tabs-dropdown.btn.btn-block.btn-primary">Tabs</a>
            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
              <li class="" id="nav-tabs-wrapper"><a href="<?php echo base_url();?>assets/web/web#vtab1" data-toggle="tab">Temperature</a></li>
              <li class="" id="nav-tabs-wrapper"><a href="<?php echo base_url();?>assets/web/web#vtab2" data-toggle="tab">Sunlight</a></li>
              <li id="nav-tabs-wrapper"><a href="<?php echo base_url();?>assets/web/web#vtab3" data-toggle="tab">Soil Texture</a></li>
              <li id="nav-tabs-wrapper"><a href="<?php echo base_url();?>assets/web/web#vtab4" data-toggle="tab">Soil Moisture</a></li>
              <li id="nav-tabs-wrapper"><a href="<?php echo base_url();?>assets/web/web#vtab5" data-toggle="tab">Soil Nutrition</a></li>
              <li id="nav-tabs-wrapper"><a href="<?php echo base_url();?>assets/web/web#vtab6" data-toggle="tab">Soil Temperature</a></li>
              <li id="nav-tabs-wrapper"><a href="<?php echo base_url();?>assets/web/web#vtab7" data-toggle="tab">Previous Crop</a></li>
              <li id="nav-tabs-wrapper"><a href="<?php echo base_url();?>assets/web/web#vtab8" data-toggle="tab">Compatible Crop</a></li>
              <li id="nav-tabs-wrapper"><a href="<?php echo base_url();?>assets/web/web#vtab9" data-toggle="tab">Fertilizer</a></li>
              <li id="nav-tabs-wrapper"><a href="<?php echo base_url();?>assets/web/web#vtab10" data-toggle="tab">Water </a></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <div class="tab-content">
                 
                <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
                    <pre>
                        <code class="language-html" data-lang="html">
                           <p><?php echo $crop[0]['temperature'];?> </p>
                        </code>  
                    </pre>
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="vtab2">
                    <pre>
                        <code class="language-html" data-lang="html">
                    <p> <?php echo $crop[0]['sunlight'];?></p>
                    </code>
                    </pre>  
                   
                </div>
                 <div role="tabpanel" class="tab-pane fade in" id="vtab3">
                    <pre>
                        <code class="language-html" data-lang="html">
                    <p> <?php echo $crop[0]['soil_texture'];?></p>
                    </code>
                    </pre>  
                   
                </div> 
                <div role="tabpanel" class="tab-pane fade in" id="vtab4">
                    <pre>
                        <code class="language-html" data-lang="html">
                    <p> <?php echo $crop[0]['soil_moisture'];?></p>
                    </code>
                    </pre>  
                   
                </div>
                 <div role="tabpanel" class="tab-pane fade in" id="vtab5">
                    <pre>
                        <code class="language-html" data-lang="html">
                    <p> <?php echo $crop[0]['soil_nutrition'];?></p>
                    </code>
                    </pre>  
                   
                </div>
                 <div role="tabpanel" class="tab-pane fade in" id="vtab6">
                    <pre>
                        <code class="language-html" data-lang="html">
                    <p> <?php echo $crop[0]['soil_temperature'];?></p>
                    </code>
                    </pre>  
                   
                </div>
                 <div role="tabpanel" class="tab-pane fade in" id="vtab7">
                    <pre>
                        <code class="language-html" data-lang="html">
                    <p> <?php echo $crop[0]['prev_crop'];?></p>
                    </code>
                    </pre>  
                   
                </div>
                 <div role="tabpanel" class="tab-pane fade in" id="vtab8">
                    <pre>
                        <code class="language-html" data-lang="html">
                    <p> <?php echo $crop[0]['compatible_crop'];?></p>
                    </code>
                    </pre>  
                   
                </div>
                 <div role="tabpanel" class="tab-pane fade in" id="vtab9">
                    <pre>
                        <code class="language-html" data-lang="html">
                    <p> <?php echo $crop[0]['fertilizer'];?></p>
                    </code>
                    </pre>  
                   
                </div>
                 <div role="tabpanel" class="tab-pane fade in" id="vtab10">
                    <pre>
                        <code class="language-html" data-lang="html">
                    <p> <?php echo $crop[0]['water'];?></p>
                    </code>
                    </pre>  
                   
                </div>
                
               
               
                
           
            </div>
        </div>
    </div>
   
        </div>
	</div>
</div>
   
	<script>$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			})</script>
		</div>
	</div>

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
	<!--//footer-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/web/js/bootstrap.js"> </script>
    <script src="<?php echo base_url();?>assets/web/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/web/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/web/js/classie.js"></script>
<script src="<?php echo base_url();?>assets/web/js/TweenMax.min.js"></script>
<script src="<?php echo base_url();?>assets/web/js/index.js"></script>
<script src="<?php echo base_url();?>assets/web/js/index2.js"></script>
 <script src="<?php echo base_url();?>assets/web/http://code.jquery.com/jquery.js"></script>
    
	<!--//footer-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/web/js/bootstrap.js"> </script>
</body>
</html>