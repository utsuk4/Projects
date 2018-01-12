

$(document).ready(function(){
	var arr=['farm3.jpg','farm2.jpg','farm1.jpg',];
	var i = 0;
	$('#clickme2').click(function(){
		$('#image2').attr('src','../images/'+arr[i++]);
		if(i>arr.length-1){
			i=0;
		}
	});
});