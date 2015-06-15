(function($){


	//scripts go here.
	//console.log('script enqueued!');
	$(document).ready(function() {
		$('.res3in').find('.wpb_column').each(function(i) {
			$(this).find('.shortcode-wrapper').find('h2').prepend('<span class="mild">0' + (i + 1) + '.</span> ');
		});

		//adding the scroll down button on home page slider
		if ($('body').hasClass('home')) {
			$('.wpb_revslider_element').append(
				'<div class="scrolldown_home"></div>'
			);
		}
		//on click of scroll down - scrolling down
		$(document).on('click', '.scrolldown_home', function() {
			$high = window.innerHeight ? window.innerHeight : $(window).height();
			$('html, body').animate({ scrollTop: ($high - 55) }, 600);
		});
	});


})(jQuery);