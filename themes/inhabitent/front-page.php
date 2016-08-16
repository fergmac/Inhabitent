<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" cla	ss="content-area">
		<main id="main" class="site-main" role="main">


		<?php  //shop stuff on front page
			$arg = array( 'taxonomy' => 'product-type', 'hide_empty' => true);

			$terms = get_terms( $arg ); 
    	?>
		<?php foreach ( $terms as $term ) : ?>

		<a href=" <?php get_term_link($term); ?> "><?php echo $term->name. ' Stuff'
		?></a> 
		
		<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/'.$term->slug. '.svg';?>" alt = ""/>

		<p><?php echo $term->description ?></p>

		


		<?php endforeach; ?>



		<?php //inhabitent journal posts on front page
			$args = array( 'post_type' => 'post', 'posts_per_page'   => 3 );

   			$blog_posts = get_posts( $args ); // returns an array of posts
   		?>
   		<?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>

   		<?php the_post_thumbnail(); ?> 

   		<p><?php the_date(); ?></p>

		<h1><?php the_title(); ?></h1>

		<a href="<?php the_permalink(); ?>"><div class="read-entry">read entry</div></a>
		
	
   		<?php endforeach; wp_reset_postdata(); ?>




		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

