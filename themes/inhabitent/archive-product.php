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
				<div class="shop-stuff-header">
				<div class="shop-title"><h1>Shop Stuff</h1></div>
				<div class="product-list-style">
				<ul>
					<li><p><a href="<?php get_term_link(); ?>">Do</a></p></li>
					<li><p><a href="<?php get_term_link(); ?>">Eat</a></p></li>
					<li><p><a href="<?php get_term_link(); ?>">Sleep</a></p></li>
					<li><p><a href="<?php get_term_link(); ?>">Wear</a></p></li>
				<?php
					
					the_archive_description( '<div e="taxonomy-description">', '</div>' );
				?>
				</div>
			</header><!-- .page-header -->

			
			<div class="archive-product-grid">
			
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="single-product-block">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>">
					<header class="entry-header">
						
							<div class="thumbnail-wrapper">
							<a href="<?php get_permalink(); ?> ">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
							</a>
							</div>
						<div class="product-info">
						<?php the_title(); ?>

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
