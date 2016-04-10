<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<?php get_header('page'); ?>

	<section class="Content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="Entry">
			<header class="Entry-header">
				<small class="Entry-small">Escrito por</small> <strong class="Entry-author"><?php the_author(); ?></strong>
				<time class="Entry-time"><?php the_date(); ?></time>
			</header>
			<section class="Entry-descriptionContainer">
				<?php the_content(); ?>
			</section>
		</article>

		<div class="CardAuthor">
			<div class="CardAuthor-mainContainer">
				<figure class="CardAuthor-imageContainer">
					<img src="<?php bloginfo('template_directory'); echo "/images/profile.jpg"; ?>" height="80" class="CardAuthor-image">
				</figure>

				<strong class="CardAuthor-name">Jonathan Pumares</strong>
			</div>
			
			<p class="CardAuthor-description">Full Stack Developer en Tecnologías HTML5, CSS3, JavaScript, Python, Django, NodeJS, MySQL, PostgreSQL, etc.</p>
			
		</div>

		<div class="Comentarios">
			<?php comments_template('/comments.php'); ?>
		</div>

		
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

	</section>

	

	<?php get_footer(); ?>
	
</body>
</html>