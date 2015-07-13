(function($){


	//scripts go here.
	//console.log('script enqueued!');
	$(document).ready(function() {
		//why us counts
		$('.reason3.res4').each(function() {
			$(this).find('.res3in').find('.vc_col-sm-6').each(function(i) {
				console.log(i);
				$(this).find('.shortcode-wrapper').find('h4').prepend('<span class="mild">0' + (i + 1) + '.</span> ');
			});
		});
		$('.res3 .res3in').find('.wpb_column').each(function(i) {
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

	//Timeline jQuery
	$(window).load(function() {
		var $timeline_block = $('.cd-timeline-block');

		//hide timeline blocks which are outside the viewport
		$timeline_block.each(function(i){
			if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
			}
		});

		//on scolling, show/animate timeline blocks when enter the viewport
		$(window).on('scroll', function(){
			$timeline_block.each(function(){
				if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
					$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
				}
			});
		});

		$('.tabbed_maps .vc_col-sm-6').find('.wpb_wrapper').eq(0).addClass('current');
		$('.tabbed_maps').find('.shortcode-map-embed').eq(0).addClass('current');
	});

	//Contact Page

	$(document).on('click', '.tabbed_maps .vc_col-sm-6 .wpb_wrapper', function(e) {
		$('.tabbed_maps .vc_col-sm-6').find('.wpb_wrapper').removeClass('current');
		$('.tabbed_maps').find('.shortcode-map-embed').removeClass('current');

		$(this).addClass('current');

		console.log ($(this).parent().hasClass('to_loca_1'));
		if ($(this).parent().hasClass('to_loca_1')) {
			$('.tabbed_maps').find('.loca_1').addClass('current');
		} else if ($(this).parent().hasClass('to_loca_2')) {
			$('.tabbed_maps').find('.loca_2').addClass('current');
		}
	});

	//Gallery page
	$(window).load(function() {
		if ($('body').hasClass('page-template-page-gallery-standard')) {
			$('#standard-gallery-masonry').find('.standard-gallery-item-wrap').each(function() {
				$(this).find('.hb-gal-standard-img-wrapper').find('a').attr('rel', 'prettyPhoto[gallery_all]');
			});
		}
	});


	$(window).load(function() {
		//Sorting the ul li - gallery
		$all_li = [];
		$('.filter-tabs').find('li').each(function() {
			$all_li.push($(this).html());
		});
		for (var i = 0; i < $all_li.length; i++) {
			console.log($all_li[i]);
		}
	});


})(jQuery);