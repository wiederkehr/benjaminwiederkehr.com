$(document).ready(function(){
	$('#header h1').hover(
		function(){
			$('#header h1 a img').stop().animate({ opacity: 0 }, 500);
		},
		function(){
			$('#header h1 a img').stop().animate({ opacity: 1 }, 500);
		}
	);
});