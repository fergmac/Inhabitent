<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" cla	ss="content-area">
		<main id="main" class="site-main" role="main">
	<div class="inhabitent-hero">
	<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg' ?>" class="inhabitent-about-logo" alt="Inhabitent About Logo">
	
	</div>
	<h2>Shop Stuff</h2>
	<div class="shop-stuff-container">

		<?php  //shop stuff on front page
			$arg = array( 'taxonomy' => 'product-type', 'hide_empty' => true);

			$terms = get_terms( $arg ); 
    	?>
		<?php foreach ( $terms as $term ) : ?>
		<div class="product-type-block">
			
			
			<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/'.$term->slug. '.svg';?>" alt = ""/>

			<p><?php echo $term->description ?></p>

			<a href=" <?php get_term_link($term); ?> " ><?php echo $term->name. ' Stuff'
			?></a> 
		</div>
		
		<?php endforeach; ?>
	</div>
	<h2>Inhabitent Journal</h2>
	<div class="inhabitent-journal">
		<?php //inhabitent journal posts on front page
			$args = array( 'post_type' => 'post', 'posts_per_page'   => 3 );

   			$blog_posts = get_posts( $args ); // returns an array of posts
   		?>
   		<?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>
   		<div class="inhabitent-journal-block">
		
	   		<div class="journal-block-image"><?php the_post_thumbnail(); ?></div> 
	   		<div class="journal-block-info">
			
		   			<p><?php the_date(); ?></p>

				<a><h1><?php the_title(); ?></h1></a>

				<a href="<?php the_permalink(); ?>"><div class="read-entry">read entry</div></a>
			
			</div>	
		</div>
   		<?php endforeach; wp_reset_postdata(); ?>
	</div>
	<div class="latest-adventures">Latest Adventures</div>
		<div class="adventures-container">
			<div class="leftside-adventures">
				<div class="rightside-adventures">
			</div>
		</div>



		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

