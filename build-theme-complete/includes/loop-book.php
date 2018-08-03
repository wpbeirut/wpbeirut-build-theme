<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //Open the loop ?>
			
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<section class="entry-content">
			
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/has_post_thumbnail/
			  // check if post have a thumbnail
			if ( has_post_thumbnail() ) {
			  // method reference https://developer.wordpress.org/reference/functions/the_post_thumbnail/
			  // Display the psot thumbnail
				the_post_thumbnail( 'medium', array ( 'class' => 'alignleft' ) );
			}
			?>
			
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/the_content/
			  // Display the post content.
				the_content(); 
			?>
			
		</section><!-- .entry-content -->	

		<section class="entry-utility">
			<?php
			  // method reference https://developer.wordpress.org/reference/functions/get_the_category_list/
			  // Retrieve category list for a post in either HTML list or custom format.
			echo 'Posted in: ' . get_the_category_list( ', ' ) . '</p>'; 
			?>
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/get_the_term_list/
			  // Retrieve a post’s terms as a list with specified format.
			echo get_the_term_list( $post->ID, 'wpbeirut_genre', '<p>Genre(s): ', ', ', '</p>' );
			 ?>
		</section><!-- .entry-utility -->
		
	</article>

<?php endwhile ; endif; // End the loop. ?>