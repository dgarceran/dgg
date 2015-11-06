<?php /* Template Name: About Me */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="container" id='about-me-content'>
		<h2>about.me.</h2>
		<div class="row">
			<div class="eight columns offset-by-one">
				<div class="row">
					<div class='twelve columns'>
						<?php the_content(); ?>
					</div>
				</div>
				<div class="row tabs">
					<div class="four columns tab" id="tab1">
						<div class="row">
							<h3>music.</h3>
						</div>
					</div>
					<div class="four columns tab" id="tab2">
						<div class="row">
							<h3>photography.</h3>
						</div>
					</div>
					<div class="four columns tab" id="tab3">
						<div class="row">
							<h3>software.</h3>
						</div>
					</div>
				</div>
				<div class="row tabs-content">
					<div class="row tab-content tab1" style="display:none">
						<div class='twelve columns'>
							<?php echo get_field("music"); ?>
						</div>
					</div>
					<div class="row tab-content tab2" style="display:none">
						<div class='twelve columns'>
							<div class="row">
								<div class="four columns">
									<img src="<?php echo get_field('image_link_1'); ?>" alt="">
								</div>
								<div class="four columns">
									<img src="<?php echo get_field('image_link_2'); ?>" alt="">
								</div>
								<div class="four columns">
									<img src="<?php echo get_field('image_link_3'); ?>" alt="">
								</div>
							</div>
							<div class="row">
								<div class="four columns">
									<img src="<?php echo get_field('image_link_4'); ?>" alt="">
								</div>
								<div class="four columns">
									<img src="<?php echo get_field('image_link_5'); ?>" alt="">
								</div>
								<div class="four columns">
									<img src="<?php echo get_field('image_link_6'); ?>" alt="">
								</div>
							</div>
							<div class="row">
								<div class="four columns">
									<img src="<?php echo get_field('image_link_7'); ?>" alt="">
								</div>
								<div class="four columns">
									<img src="<?php echo get_field('image_link_8'); ?>" alt="">
								</div>
								<div class="four columns">
									<img src="<?php echo get_field('image_link_9'); ?>" alt="">
								</div>
							</div>
							<div class="row">
								<div class="four columns">
									<p><?php echo get_field("extra_text"); ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row tab-content tab3" style="display:none">
						<div class='twelve columns'>
							<?php echo html_entity_decode(get_field("software")); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>
<script type="text/javascript">
$(document).ready(function(){
	$(".tab").click(function(){
		$(".tab").removeClass("tab-active");
		$(this).addClass("tab-active");
		$(".tab-content").hide();
		var iden = $(this).attr("id");
		var id = "."+iden;
		$(id).show();
	});
});

</script>
<?php get_footer(); ?>