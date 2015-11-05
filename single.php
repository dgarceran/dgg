<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="container" class='single-content'>
		<div class="row">
			<div class="twelve columns">
				<h2><?php the_title(); ?></h2>
			</div>
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