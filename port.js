$(document).ready(function(){
	$(".dropdown-trigger").dropdown({
		hover:true
	});
	$('.parallax').parallax();
	$('#aboutZoomIn').hide();
	$('.introduce-icon').hide();
	$('.carousel.carousel-slider').carousel({
		//  anything to set
		fullWidth:true
	}).hide();
});

$(document).on('scroll', function() {
    if($(this).scrollTop()>=$('.card').position().top){
    	$('#aboutZoomIn').show();
    	$('.introduce-icon').show();    	
        $('#aboutZoomIn').addClass('animated zoomIn slow'); 
        $('.introduce-icon').addClass('animated fadeInLeft slow'); 

        // For carousel fadeInUp effect
        if($(this).scrollTop()>$('.introduce-icon').position().top){
    		$('.carousel.carousel-slider').show();
    		$('.carousel.carousel-slider').addClass('animated fadeInUp slower delay-3s');
    	}
    }  	    
});