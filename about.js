//date we are counting down
var countDownDate = new Date("Dec 31,2018 00:00:00").getTime();


//update count down every 1 second
var x = setInterval(function(){

	//get todays date and time
	var now = new Date().getTime();

	//How long between countDownDate and now
	var distance = countDownDate - now;

	// Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    //Output result
    document.getElementById("count-time").innerHTML = days + " days " + hours + " hours " + minutes + " minutes " + seconds + " seconds ";

    //if count down is finished
    if(distance < 0)
    {
    	clearInterval(x);
    	document.getElementById("count-time").innerHTML = "Have you succeed?";
    }
},1000);