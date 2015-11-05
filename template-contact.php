<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="container" id='contact-content'>
		<div class="row">
			<h2>contact.</h2>
		</div>
		<div class="row">
			<div class="twelve columns">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>