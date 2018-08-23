/*   VIDEO SCIPRT for show control by hover
(function(window)
{
	function setupVideo()
	{
		var v = document.getElementById('homeVideo');		
		v.addEventListener('mouseover',function(){this.controls = true;},false);
		v.addEventListener('mouseout',function(){this.controls = false;},false);
	}
	window.addEventListener('load',setupVideo,false);
})(window);


function openNav()
{
	var x = document.getElementById("topStickyBar");
	var title = document.getElementById('the-title');
    if (x.className === "top-sticky-bar") {
        x.className += " responsive";
        title.style.display = "none";
    } else {
        x.className = "top-sticky-bar";
        title.style.display = "block";
    }
}*/
var lineDrawing = anime({
  targets: '#lineDrawing .lines path',
  strokeDashoffset: [anime.setDashoffset, 0],
  easing: 'easeInOutSine',
  duration: 1500,
  delay: function(el, i) { return i * 250 },
  direction: 'alternate',
  loop: true
});
