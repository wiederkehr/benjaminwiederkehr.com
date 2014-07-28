$(document).ready(function(){
	$('a').defuscate();
	$('#coda-slider-1').codaSlider({
		dynamicArrows: false,
		dynamicTabs: false,
		slideEaseDuration: 300,
		autoHeightEaseDuration: 300,
	});
	$('.icon-list-item').hover(
		function(){
			$(this).find('.icon-large').addClass('hover');
			$(this).find('.cal').addClass('hover');
		},
		function(){
			$(this).find('.icon-large').removeClass('hover');
			$(this).find('.cal').removeClass('hover');
		}
	);
});
jQuery.fn.defuscate = function( settings ) {
	settings = jQuery.extend({
		link: true
		}, settings);
		var regex = /\b([A-Z0-9._%-]+)\([^)]+\)((?:[A-Z0-9-]+\.)+[A-Z]{2,6})\b/gi;
		return this.each(function() {
			$(this).attr('href', $(this).attr('href').replace(regex, '$1@$2'));
			var is_link = true;
			$(this).html($(this).html().replace(regex, (settings.link && !is_link ? '<a href="mailto:$1@$2">$1@$2</a>' : '$1@$2')));
		}
	);
}
