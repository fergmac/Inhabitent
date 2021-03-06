	<?php
/**
 * The template for displaying archive pages.
 * Template name: Shop Stuff
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="product-content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<div class="taxonomy-wrapper">
				<div class="product-list-style">
					
				<?php  //shop stuff on front page
				$arg = array( 'taxonomy' => 'product-type', 'hide_empty' => true);

				$terms = get_terms( $arg ); 
				?>
				 <h1 class="taxonomy-title">
       			<?php single_term_title();?>
       			</h1>
					
				<?php
					
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				</div>
			</div>
			</header><!-- .page-header -->

			
			<div class="archive-product-grid">
			
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="single-product-block">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						
							<div class="thumbnail-wrapper">
							<a href="<?php echo get_permalink(); ?> ">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
							</a>
							</div>
						<div class="product-info">
						<div class="product-title"><?php the_title(); ?></div>
						<div class="product-price"><?php echo CFS()->get( 'product_price' ); ?></div>



						</div>
						

					</header><!-- .entry-header -->

					
				</article><!-- #post-## -->
			</div>
			<?php endwhile; ?>
			</div>
			<?php the_posts_navigation(); ?>
			
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
