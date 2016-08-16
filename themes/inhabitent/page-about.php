<?php
/**
 * Template part for displaying about page.
 * Template name: About Page
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php echo CFS()->get( 'header_image' ); ?>
			<?php echo CFS()->get( 'our_story' ); ?>
			<?php echo CFS()->get( 'our_team' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

