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
	$(".gallery-btn").click(function() {
		$('html, body').animate({
			scrollTop: $(".home-gallery").offset().top -62
		}, 1500);
	});
	$(".course-btn").click(function() {
		$('html, body').animate({
			scrollTop: $(".we-provide").offset().top -62
		}, 1500);
	});
});