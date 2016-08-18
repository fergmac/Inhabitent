<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" cla	ss="content-area">
		<main id="main" class="site-main" role="main">
	<h2>Shop Stuff</h2>
	<div class="shop-stuff-container">

		<?php  //shop stuff on front page
			$arg = array( 'taxonomy' => 'product-type', 'hide_empty' => true);

			$terms = get_terms( $arg ); 
    	?>
		<?php foreach ( $terms as $term ) : ?>
		<div class="product-type-block">
			<a href=" <?php get_term_link($term); ?> "><?php echo $term->name. ' Stuff'
			?></a> 
			
			<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/'.$term->slug. '.svg';?>" alt = ""/>

			<p><?php echo $term->description ?></p>
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
		<ul>
	   		<li><?php the_post_thumbnail(); ?></li> 

	   		<li><p><?php the_date(); ?></p></li>

			<li><h1><?php the_title(); ?></h1></li>

			<li><a href="<?php the_permalink(); ?>"><div class="read-entry">read entry</div></a></li>
		</ul>	
		</div>
   		<?php endforeach; wp_reset_postdata(); ?>
	</div>



		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

