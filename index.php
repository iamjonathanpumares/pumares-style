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
	<?php get_header('home'); ?>

	<section class="EntryContainer">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="Entry">
			<header class="Entry-titleContainer">
				<h2 class="Entry-title"><a href="<?php the_permalink(); ?>" class="Entry-titleLink"><?php the_title(); ?></a></h2>
			</header>
			<section class="Entry-descriptionContainer">
				<?php the_excerpt(); ?>
			</section>
			<footer class="Entry-footer">
				<small class="Entry-small">Escrito por</small> <strong class="Entry-author"><?php the_author(); ?></strong>
				<time class="Entry-time"><?php the_date(); ?></time>
			</footer>
		</article>
		<div class="Comentarios">
			<?php comments_template(); ?>
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