<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php the_title(); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<?php get_header('page'); ?>

	<section class="EntryContainer">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="Entry">
			<section class="Entry-descriptionContainer">
				<?php the_content(); ?>
			</section>
		</article>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

	</section>

	<?php get_footer(); ?>
	
</body>
</html>