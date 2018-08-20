$(function()
{
	$(".bg").fadeIn();
	$(".title").fadeIn(5000);
	$(".slow-title").delay(2000).fadeIn(1500);
	$(".top-sticky-bar").fadeIn(2000);
});

var position = 0;

$(window).scroll(function(){
	var newPosition = $(this).scrollTop();


	{
		//check users' device
		if(!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)))
		{
			//if users are not using mobile,proceed this code
			if(newPosition >= position)
			{
				$(".top-sticky-bar").fadeOut(1500);	
			}
			else
			{
				$(".top-sticky-bar").fadeIn(1500);
			}
			position = newPosition;
		}
	}
});
