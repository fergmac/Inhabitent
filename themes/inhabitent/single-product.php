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
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="single-product-wrapper">
						<div class="single-product-image-wrapper">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
						</div>
						<div class="single-product-info-wrapper">
								<?php the_title( '<h1>', '</h1>' ); ?>
					

						
								<?php echo CFS()->get( 'product_price' ); ?>
								<?php the_content(); ?>
						
						</div>
						
				</article><!-- #post-## -->

				<?php endwhile; // End of the loop. ?>
			</div>
		</main><!-- #main -->
			
	</div><!-- #primary -->

<?php get_footer(); ?>
