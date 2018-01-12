function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(27.7172,85.3240),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);


$(document).ready(function(){
	var arr=['farm3.jpg','farm2.jpg','farm1.jpg','farm.jpg'];
	var i = 0;
	$('#clickme').click(function(){
		$('#image').attr('src','images/'+arr[i++]);
		if(i>arr.length-1){
			i=0;
		}
	});



    $("#flip1").hover(function(){
        $("#panel1").slideToggle(700);
    });
	$("#flip2").hover(function(){
        $("#panel2").slideToggle(700);
    });
	$("#flip3").hover(function(){
        $("#panel3").slideToggle(700);
    });
	$("#flip4").hover(function(){
        $("#panel4").slideToggle(700);
    });
	$("#flip5").hover(function(){
        $("#panel5").slideToggle(700);
    });
});