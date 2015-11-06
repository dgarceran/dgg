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
						<div class='twleve columns'>
							<p>
								content asldkjfnalksdjfnklasdnfkljadsf
								asdfknasldfjnklasjdf
								asdkkfjnasldkfnkalsdfnkADFSNLKJADFS
								ASKDFLASDKFLÑASDFLÑKDFJ
								skdñflmlsdfklñsdfkglñfsdk1
							</p>
						</div>
					</div>
					<div class="row tab-content tab2" style="display:none">
						<div class='twleve columns'>
							<p>
								content asldkjfnalksdjfnklasdnfkljadsf
								asdfknasldfjnklasjdf
								asdkkfjnasldkfnkalsdfnkADFSNLKJADFS
								ASKDFLASDKFLÑASDFLÑKDFJ
								skdñflmlsdfklñsdfkglñfsdk2
							</p>
						</div>
					</div>
					<div class="row tab-content tab3" style="display:none">
						<div class='twleve columns'>
							<p>
								content asldkjfnalksdjfnklasdnfkljadsf
								asdfknasldfjnklasjdf
								asdkkfjnasldkfnkalsdfnkADFSNLKJADFS
								ASKDFLASDKFLÑASDFLÑKDFJ
								skdñflmlsdfklñsdfkglñfsdk3
							</p>
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