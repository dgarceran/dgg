<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class='dgg-fullwidth-slider noscroll'>
	<div class="slide" id="slide-1" style="background: url(<?php echo get_field('link_image_1'); ?>) no-repeat center center fixed;">
		<!-- <div class='container slide-text'>
			<div class="row">
				<div class='twelve columns'>
					<h3>David</h3>
				</div>
			</div>
		</div> -->
	</div>
	<div class="slide" id="slide-2" style="background: url(<?php echo get_field('link_image_2'); ?>) no-repeat center center fixed;"></div>
	<div class="slide" id="slide-3" style="background: url(<?php echo get_field('link_image_3'); ?>) no-repeat center center fixed;"></div>
	<div class="slide" id="slide-4" style="background: url(<?php echo get_field('link_image_4'); ?>) no-repeat center center fixed;"></div>
	<div class="slide" id="slide-5" style="background: url(<?php echo get_field('link_image_5'); ?>) no-repeat center center fixed;"></div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<script>
	$(window).load(function() {
		$('.dgg-fullwidth-slider').slick({
			autoplay: true,
			dots: true,
			arrows: false,
			infinite: true,
            autoplaySpeed: 8000,
            speed: 500,
			fade: true
		});
	});
</script>
