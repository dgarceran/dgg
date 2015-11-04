<footer>
	<div class="container">
		<div class="row">
			<div class="four columns">
				<h3>david.garceran.</h3>
				<p id="dgg-footer-text">lorem ipsum dolor sit amet, consectetur adipisicing elit. accusantium blanditiis reiciendis maiores facere consequuntur 
					delectus animi officia molestiae et, nemo ex asperiores ad porro, consequatur nam in repellat! sapiente, voluptatem.</p>
			</div>
			<div class="four columns">
				<h3>pages</h3>
				<?php $defaults = array(
						'theme_location'  => 'secondary',
						'menu'            => 'secondary',
						'container'       => 'div',
						'container_class' => '',
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
				 	wp_nav_menu( $defaults ); ?>
			</div>
			<div class="four columns" id="dgg-links">
				<h3>contact</h3>
				<ul>
					<a href=""><li>twitter</li></a>
					<a href=""><li>facebook</li></a>
					<a href=""><li>linkedin</li></a>
				</ul>
			</div>
		</div>
	</div>
</footer>
</body>
</html>