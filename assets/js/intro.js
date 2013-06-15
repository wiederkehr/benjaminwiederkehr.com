$(document).ready(function(){
	$('a').defuscate();
	$('#coda-slider-1').codaSlider({
		dynamicArrows: false,
		dynamicTabs: false,
		slideEaseDuration: 300,
		autoHeightEaseDuration: 300,
	});
	$('header h1').hover(
		function(){
			$('header h1 a img').stop().animate({ opacity: 0 }, 300);
		},
		function(){
			$('header h1 a img').stop().animate({ opacity: 1 }, 300);
		}
	);
	$('.icon-list-item').hover(
		function(){
			$(this).find('img').stop().animate({ marginTop: -6 }, 'fast');
			$(this).find('.cal').stop().animate({ marginTop: -6 }, 'fast');
		},
		function(){
			$(this).find('img').stop().animate({ marginTop: 0 }, 'fast');
			$(this).find('.cal').stop().animate({ marginTop: 0 }, 'fast');
		}
	);
	var skimInt;
	$('.skim').hover(function(){
		var curr = 1;
		skimInt = setInterval(function(){
			$('.skim img').hide();
			$('.skim img:nth-child('+curr+')').show();
			if(curr < 20){
				curr++;
			}else{
				curr = 0;
			}
		}, 100);
	},
	function(){
		$('.skim img').hide();
		clearInterval(skimInt);
	});
});
jQuery.fn.defuscate = function( settings ) {
	settings = jQuery.extend({
		link: true
		}, settings);
		var regex = /\b([A-Z0-9._%-]+)\([^)]+\)((?:[A-Z0-9-]+\.)+[A-Z]{2,6})\b/gi;
		return this.each(function() {
			//if ( $(this).is('a[@href]') ) {
				// If it's an <a> element, defuscate the href attribute
				$(this).attr('href', $(this).attr('href').replace(regex, '$1@$2'));
				// Make sure that the element's contents is not made into a link
				var is_link = true;
				//alert($(this).attr('href'));
			//}
			// Defuscate the element's contents
			$(this).html($(this).html().replace(regex, (settings.link && !is_link ? '<a href="mailto:$1@$2">$1@$2</a>' : '$1@$2')));
		}
	);
}
