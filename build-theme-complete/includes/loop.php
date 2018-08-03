<?php
// method reference https://developer.wordpress.org/reference/functions/have_posts/
// Whether current WordPress query has results to loop over.
// method reference https://developer.wordpress.org/reference/functions/the_post/
// Iterate the post index in the loop.
 if ( have_posts() ) : while ( have_posts() ) : the_post(); //Open the loop 
 
 // method reference https://developer.wordpress.org/reference/functions/the_ID/
 // Display the ID of the current item in the WordPress Loop.
  // method reference https://developer.wordpress.org/reference/functions/post_class/
  //  Display the classes for the post div.
  // method reference https://developer.wordpress.org/reference/functions/the_title/
  // Display or retrieve the current post title with optional markup.
 ?>
			
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<section class="entry-meta">
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/get_the_date/
			echo get_the_date(); 
			?>
		</section><!-- .entry-meta -->
		
		<section class="entry-content">
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/the_content/
			the_content(); 
			?>
		</section><!-- .entry-content -->	

		<section class="entry-utility">
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/comment_form/
			comment_form(); 
			?>
		</section><!-- .entry-utility -->
		
	</article>

<?php endwhile ; endif; // End the loop. ?>