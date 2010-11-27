$(document).ready(function() {
	$('.tx_gorillary_collection').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		timeout: 5000,
		next:   '.tx_gorillary_collection'
	});
});