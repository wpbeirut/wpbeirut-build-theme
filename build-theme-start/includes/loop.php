<?php
// method reference https://developer.wordpress.org/reference/functions/have_posts/
// Whether current WordPress query has results to loop over.
// method reference https://developer.wordpress.org/reference/functions/the_post/
// Iterate the post index in the loop.
//Open the loop 
 
 // method reference https://developer.wordpress.org/reference/functions/the_ID/
 // Display the ID of the current item in the WordPress Loop.
  // method reference https://developer.wordpress.org/reference/functions/post_class/
  //  Display the classes for the post div.
  // method reference https://developer.wordpress.org/reference/functions/the_title/
  // Display or retrieve the current post title with optional markup.
 ?>
			
	<article id="post-<?php // the id ?>" <?php  // the post class ?>>
		
		<h2 class="entry-title"><a href="<?php // the permalink ?>"><?php // the title ?></a></h2>

		<section class="entry-meta">
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/get_the_date/
			// echo to print get the date 
			?>
		</section><!-- .entry-meta -->
		
		<section class="entry-content">
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/the_content/
			// the content 
			?>
		</section><!-- .entry-content -->	

		<section class="entry-utility">
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/comment_form/
			// comment form 
			?>
		</section><!-- .entry-utility -->
		
	</article>

<?php // End the loop. ?>