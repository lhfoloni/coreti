$(document).ready(function($) {
	$(".button-collapse").sideNav();
	$(".slider").slider({full_width: true});
	// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
	$('#modal1').modal('');
	$('#modal2').modal('');
});