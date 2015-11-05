<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

 <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

	<?php if( have_posts() ): ?>

        <?php while( have_posts() ): the_post(); ?>

        <div class="container" id='blog-content'>
        	<div class="row">
        		<h2>blog.</h2>
        	</div>
        	<div class="row">
        		<div class="twelve columns">
        			<div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
		        		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a>
		                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		                <span class="meta">
		                	<strong><?php the_time('F jS, Y'); ?></strong> / <strong><?php the_author_link(); ?></strong> / 
		                	<span class="comments">
		                		<?php comments_popup_link(__('0 comments','dgg'),__('1 comment','dgg'),__('% comments','dgg')); ?>
		                	</span>
		                </span>
						<?php the_excerpt(__('Continue reading »','dgg')); ?>
		            </div><!-- /#post-<?php get_the_ID(); ?> -->
        		</div>
        	</div>
        </div>   

        <?php endwhile; ?>

		<div class="navigation">
			<span class="newer"><?php previous_posts_link(__('« Newer','dgg')) ?></span> <span class="older"><?php next_posts_link(__('Older »','dgg')) ?></span>
		</div><!-- /.navigation -->

	<?php else: ?>

		<div id="post-404" class="noposts">

		    <p><?php _e('None found.','dgg'); ?></p>

	    </div><!-- /#post-404 -->

	<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>