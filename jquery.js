$(document).ready(function(){
	$("#show").click(function(){
		$('html,body').animate({
			scrollTop:$(".portfolio").fadeIn(3000).offset().top},1000)	
	});
});
