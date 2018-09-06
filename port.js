$(document).ready(function(){
	//Jquery function
	$(".dropdown-trigger").dropdown({
		hover:true
	});	
	$('.parallax').parallax();
	$('.timepicker').timepicker().hide();


	//HTML class Tag
	$('#aboutZoomIn').hide();
	$('.introduce-icon').hide();
	$('.carousel.carousel-slider').carousel({
		//  anything to set
		fullWidth:true
	}).hide();
	$('.contact-container').hide();	
	$('#submit').hide();
});

$(document).on('scroll', function() {
    if( $(this).scrollTop() >= $('.card').position().top ){
    	$('#aboutZoomIn').show();
    	$('.introduce-icon').show();
    	$('.contact-container').show();    	
        $('#aboutZoomIn').addClass('animated zoomIn slow'); 
        $('.introduce-icon').addClass('animated fadeInLeft slow'); 

        // For carousel fadeInUp effect
        if($(this).scrollTop()>$('.introduce-icon').position().top){
    		$('.carousel.carousel-slider').show();
    		$('.carousel.carousel-slider').addClass('animated fadeInUp slower delay-3s');
    	}
    }  	    
});


function popUpTime(){

	$('.timepicker').timepicker().show(1500);
	$('.timepicker').addClass('animated fadeInUpBig slower');

	//button bye bye
	$('.next').hide();	

	//welcome submit
	$('#submit').show(1500);
	$('#submit').addClass('animated slideInUp slower');

}