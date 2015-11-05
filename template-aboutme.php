<?php /* Template Name: About Me */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="container" id='about-me-content'>
		<h2>about.me.</h2>
		<div class="row">
			<div class="eight columns offset-by-one">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>