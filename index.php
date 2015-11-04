<?php get_header(); ?>
<style>
	body{
		overflow: hidden;
	}
</style>
<div class='dgg-fullwidth-slider'>
	<div class="slide" id="slide-1"><img src="http://localhost/prueba_wp/wp-content/uploads/2015/11/bg1.jpg" alt=""></div>
	<div class="slide" id="slide-2"><img src="http://localhost/prueba_wp/wp-content/uploads/2015/11/bg2.jpg" alt=""></div>
</div>
<script>
	$(document).ready(function(){
		$('.dgg-fullwidth-slider').slick({
			dots: false,
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			autoplay: true,
			autoplaySpeed: 5000
		});
	});
</script>