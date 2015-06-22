<?php
/**
 * @package WordPress
 * @subpackage Highend
 */
/*
Template Name: Page - About us
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
$main_content_style = "";
if ( vp_metabox('background_settings.hb_content_background_color') ){
	$main_content_style = ' style="background-color: ' . vp_metabox('background_settings.hb_content_background_color') . ';"';
	echo "<style type=\"text/css\">#pre-footer-area:after{border-top-color:" . vp_metabox('background_settings.hb_content_background_color') . "}</style>";
}
?>
<!-- BEGIN #main-content -->
<div id="main-content"<?php echo $main_content_style; ?>>

	<div class="container">

		<?php
			$sidebar_layout = vp_metabox('layout_settings.hb_page_layout_sidebar');
			$sidebar_name = vp_metabox('layout_settings.hb_choose_sidebar');

			if ( $sidebar_layout == "default" || $sidebar_layout == "" )
			{
				$sidebar_layout = hb_options('hb_page_layout_sidebar');
				$sidebar_name = hb_options('hb_choose_sidebar');
			}

			if ( vp_metabox('misc_settings.hb_onepage') ){
				$sidebar_layout = 'fullwidth';
			}

			if ( class_exists('bbPress') ) {
			     if ( is_bbpress() ) {
					$sidebar_layout = 'fullwidth';
			     }
			}
		?>

		<div class="row <?php echo $sidebar_layout; ?> main-row">

			<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- BEGIN .hb-main-content -->
				<?php if ( $sidebar_layout != 'fullwidth' ) { ?>
				<div class="col-9 hb-equal-col-height hb-main-content">
				<?php } else { ?>
				<div class="col-12 hb-main-content">
				<?php } ?>

				<?php the_content();?>
				<?php wp_link_pages('before=<div id="hb-page-links">'.__('Pages:', 'hbthemes').'&after=</div>'); ?>
				<?php if ( comments_open() && hb_options('hb_disable_page_comments') ) comments_template(); ?>

					<div class="ab-timeline">
						<section id="cd-timeline" class="cd-container">
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-picture">
									<i class="fa fa-star"></i>
								</div> <!-- cd-timeline-img -->

								<div class="cd-timeline-content">
									<h2>Title of section 1</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
									<a href="#0" class="hb-button hb-small-button">Read more</a>
									<span class="cd-date">Jan 14</span>
								</div> <!-- cd-timeline-content -->
							</div> <!-- cd-timeline-block -->

							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-movie">
									<i class="fa fa-film"></i>
									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cd-icon-movie.svg" alt="Movie"> -->
								</div> <!-- cd-timeline-img -->

								<div class="cd-timeline-content">
									<h2>Title of section 2</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
									<a href="#0" class="hb-button hb-small-button">Read more</a>
									<span class="cd-date">Jan 18</span>
								</div> <!-- cd-timeline-content -->
							</div> <!-- cd-timeline-block -->

							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-picture">
									<i class="fa fa-image"></i>
								</div> <!-- cd-timeline-img -->

								<div class="cd-timeline-content">
									<h2>Title of section 3</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
									<a href="#0" class="hb-button hb-small-button">Read more</a>
									<span class="cd-date">Jan 24</span>
								</div> <!-- cd-timeline-content -->
							</div> <!-- cd-timeline-block -->

							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-location">
									<i class="fa fa-map-marker"></i>
								</div> <!-- cd-timeline-img -->

								<div class="cd-timeline-content">
									<h2>Title of section 4</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
									<a href="#0" class="hb-button hb-small-button">Read more</a>
									<span class="cd-date">Feb 14</span>
								</div> <!-- cd-timeline-content -->
							</div> <!-- cd-timeline-block -->

							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-picture">
									<i class="fa fa-star"></i>
								</div> <!-- cd-timeline-img -->

								<div class="cd-timeline-content">
									<h2>Title of section 5</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
									<a href="#0" class="hb-button hb-small-button">Read more</a>
									<span class="cd-date">Feb 18</span>
								</div> <!-- cd-timeline-content -->
							</div> <!-- cd-timeline-block -->

							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-movie">
									<i class="fa fa-film"></i>
								</div> <!-- cd-timeline-img -->

								<div class="cd-timeline-content">
									<h2>Final Section</h2>
									<p>This is the content of the last section</p>
									<span class="cd-date">Feb 26</span>
								</div> <!-- cd-timeline-content -->
							</div> <!-- cd-timeline-block -->
						</section> <!-- cd-timeline -->
					</div>

				</div>
				<!-- END .hb-main-content -->

				<?php if ( $sidebar_layout != 'fullwidth' ) { ?>
				<!-- BEGIN .hb-sidebar -->
				<div class="col-3  hb-equal-col-height hb-sidebar">
					<?php
					if ( $sidebar_name && function_exists('dynamic_sidebar') )
						dynamic_sidebar($sidebar_name);
					?>
				</div>
				<!-- END .hb-sidebar -->
				<?php } ?>

			</div>
			<!-- END #page-ID -->

		</div>
		<!-- END .row -->

	</div>
	<!-- END .container -->

</div>
<!-- END #main-content -->

<?php endwhile; endif;?>
<?php get_footer(); ?>