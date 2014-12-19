<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Arquea
 * @subpackage ValuExpose Web Theme
 */

get_header(); ?>

<?php //get_sidebar(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
	<?php //if ( have_posts() ) : ?>
	<?php //while ( have_posts() ) : the_post(); ?>
	<?php //get_template_part( 'content', get_post_format() ); ?>
	<?php //endwhile; ?>
	<?php //twentytwelve_content_nav( 'nav-below' ); ?>
	<?php //else : ?>
	<?php //endif;?>
	</div>
</div>
<div style="clar:both"></div>
<div style="clear:both"></div>
</div>
</div>
<?php get_footer(); ?>