<?php get_header(); ?>
<style>
	body{
		overflow: hidden;
	}
</style>
<div class='dgg-fullwidth-slider'>
	<div class="slide" id="slide-1"></div>
	<div class="slide" id="slide-2"></div>
</div>
<script>
	$(document).ready(function(){
		$('.dgg-fullwidth-slider').slick({
			autoplay: true,
			dots: false,
			arrows: false,
			infinite: false,
			speed: 500,
            autoplaySpeed: 8000,
			fade: true,
			cssEase: 'linear',
		});
	});
</script>