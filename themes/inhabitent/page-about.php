<?php
/**
 * Template part for displaying about page.
 * Template name: About Page
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="about-content-area">
		<main id="main" class="site-main" role="main">
			<div class="about-page-hero"><h1>About</h1></div>
			<div class="about-info">
				<h2 class="about-title">Our Story</h2>
				<?php echo CFS()->get( 'our_story' ); ?>
				<h2 class="about-title">Our Team</h2>
				<?php echo CFS()->get( 'our_team' ); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>

