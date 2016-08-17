<?php
/**
 * Template part for displaying about page.
 * Template name: About Page
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="about-content-area">
		<main id="main" class="site-main" role="main">
			<div class="about-page-hero">About</div>
			<div class="about-info">
			<?php echo CFS()->get( 'our_story' ); ?>
			<?php echo CFS()->get( 'our_team' ); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>

