<?php

/**
 * Template Name: Page Template
 * @package Arquea
 * @subpackage ValuExpose
 */
get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main" class="<?php if(!is_home()): echo 'page-load-css'; endif; ?>">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>