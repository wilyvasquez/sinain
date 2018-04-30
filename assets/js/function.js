$('.timepicker').wickedpicker({twentyFour: false});
$(function() {
	$( "#datepicker" ).datepicker();
});
$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion           
		width: 'auto', //auto or any width like 600px
		fit: true   // 100% fit in a container
	});
});
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();

$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
$(document).ready(function() {
	/*
	var defaults = {
		containerID: 'toTop', // fading element id
		containerHoverID: 'toTopHover', // fading element hover id
		scrollSpeed: 1200,
		easingType: 'linear' 
	};
	*/
	
	$().UItoTop({ easingType: 'easeOutQuart' });
	
});
$('.jarallax').jarallax({
	speed: 0.5,
	imgWidth: 1366,
	imgHeight: 768
})