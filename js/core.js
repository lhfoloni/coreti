$(document).ready(function($) {
	$(".button-collapse").sideNav();
	$(".slider").slider({full_width: true});
	$('#modal1').modal('');
	$('#modal2').modal('');
	$('#modal3').modal('');
	$('.carousel').carousel();
	// Next slide
	$('.carousel').carousel('next');
	autoplay();   
	function autoplay() {
	    $('.carousel').carousel('next');
	    setTimeout(autoplay, 6000);
	}
	$('.carousel').carousel('next', 3); // Move next n times.

	// Previous slide
	$('.carousel').carousel('prev');
	$('.carousel').carousel('prev', 4); // Move prev n times.

	// Set to nth slide
	$('.carousel').carousel('set', 4);

	// Destroy carousel
	$('.carousel').carousel('destroy');
	$('.carousel.carousel-slider').carousel({fullWidth: true});
});