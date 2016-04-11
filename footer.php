<footer class="Footer">
	<div class="FooterContainer">
		<strong class="Footer-copyright">Hecho con <i class="fa fa-code" style="color: #F22613;"></i> por Jonathan Pumares</strong>
		<p class="Footer-description">Full Stack Developer en Tecnologías HTML5, CSS3, JavaScript, Python, Django, NodeJS, MySQL, PostgreSQL, etc.</p>
		<div class="Footer-socialContainer">
			<a href="#" class="Footer-socialLink"><i class="fa fa-linkedin"></i></a>
			<a href="#" class="Footer-socialLink"><i class="fa fa-github"></i></a>
			<a href="#" class="Footer-socialLink"><i class="fa fa-twitter"></i></a>
		</div>

		<?php    /**
			* Displays a navigation menu
			* @param array $args Arguments
			*/
			$args = array(
				'theme_location' => 'menu-footer',
				'container' => 'nav',
				'container_class' => 'Footer-menu',
				'menu_class' => 'Footer-list'
			);
		
			wp_nav_menu( $args ); 
		?>
	</div>
</footer>
<?php wp_footer(); ?>