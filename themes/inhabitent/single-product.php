<?php
/**
 * The template for displaying all single-products.
 * Template name: Single Product
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>
	<div class="single-product-wrapper">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<div class="single-product-image-wrapper">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	<div class="product-info-wrapper"
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php echo CFS()->get( 'product_price' ); ?>
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
