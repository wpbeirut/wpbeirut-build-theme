<?php  //Open the loop ?>
			
	<article id="post-<?php // the id  ?>" <?php // post class  ?>>
		
		<h2 class="entry-title"><a href="<?php // the permalink ?>"><?php // the title  ?></a></h2>
		
		<section class="entry-content">
			
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/has_post_thumbnail/
			  // check if post have a thumbnail
			 // {
			  // method reference https://developer.wordpress.org/reference/functions/the_post_thumbnail/
			  // Display the psot thumbnail
				
			//}
			?>
			
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/the_content/
			  // Display the post content.
				// the content  
			?>
			
		</section><!-- .entry-content -->	

		<section class="entry-utility">
			<?php
			  // method reference https://developer.wordpress.org/reference/functions/get_the_category_list/
			  // Retrieve category list for a post in either HTML list or custom format.
			//echo 'Posted in: ' . get the category link of this parameter ( ', ' ) . '</p>'; 
			?>
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/get_the_term_list/
			  // Retrieve a post’s terms as a list with specified format.
			// echo to display get the term link of this parameter  $post->ID, 'wpbeirut_genre', '<p>Genre(s): ', ', ', '</p>'
			 ?>
		</section><!-- .entry-utility -->
		
	</article>

<?php // End the loop. ?>