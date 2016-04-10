<div class="HeaderContainer" id="navbarMenu">

	<div class="Header-mobile">
		<img src="<?php bloginfo('template_directory'); echo "/images/profile.jpg"; ?>" class="Header-image ImageCircle">
		<a href="<?php bloginfo('url'); ?>" class="Header-link">Jonathan Pumares <span class="Header-description"><i class="fa fa-code"></i>Full Stack Developer<i class="fa fa-code"></i></span></a>
	</div>

	<?php    /**
		* Displays a navigation menu
		* @param array $args Arguments
		*/
		$args = array(
			'theme_location' => 'menu-header',
			'container' => 'nav',
			'container_class' => 'Header-menu',
			'menu_class' => 'Header-menuList'
		);
	
		wp_nav_menu( $args ); 
	?>
	
</div>