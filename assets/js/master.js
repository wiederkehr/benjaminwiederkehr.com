$(document).ready(function(){
	Cufon.replace('h2');
	Cufon.replace('.post h3');
	
	$('#header h1').hover(
		function(){
			$('#header h1 a img').stop().animate({ opacity: 0 }, 500);
		},
		function(){
			$('#header h1 a img').stop().animate({ opacity: 1 }, 500);
		}
	);
});