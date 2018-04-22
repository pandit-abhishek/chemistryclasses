$(document).ready(function(){
	$('#myCarousel').carousel({
	  interval: 2000
	});
	$(window).scroll(function() {
		if ($(document).scrollTop() > 100) {
			 $("header").addClass("scroll-header");
		} else {
			$("header").removeClass("scroll-header");
		}
	});
});