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
*/

function openNav()
{
	var x = document.getElementById("topStickyBar");
	var title = document.getElementById('test');
    if (x.className === "top-sticky-bar") {
        x.className += " responsive";
        title.style.display = "none";
    } else {
        x.className = "top-sticky-bar";
        title.style.display = "block";
    }
}