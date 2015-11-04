<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/skeleton.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/includes/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>
	<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
	<?php $logo_link = WP_CONTENT_URL."/themes/dgg/images/logo.png"; ?>
</head>
<div class='container'>
	<header>
		<div class="row">
			<div id="logo" class='three columns'>
				<a href="/"><h1>david.garceran.</h1></a>
			</div>
			<nav id="#menu-row" class='nine columns'>
				<?php 
				 	$defaults = array(
						'theme_location'  => 'primary',
						'menu'            => 'primary',
						'container'       => 'div',
						'container_class' => 'row',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);
				 	wp_nav_menu( $defaults );
				 ?> 
			</nav>
		</div>
	</header>
</div>