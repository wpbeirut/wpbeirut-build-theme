<?php //Open the loop ?>
			
	<article id="post-<?php // the id ?>" <?php // post class ?>>
		
		<h2 class="entry-title"><a href="<?php // the permalink ?>"><?php // the title ?></a></h2>

		<section class="entry-meta">
			<?php // echo to display get the date ?>
		</section><!-- .entry-meta -->
		
		<section class="entry-content">
			<?php // the content ?>
		</section><!-- .entry-content -->	

		<section class="entry-utility">
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/get_the_category_list/
			echo 'Posted in: ' . // get the category list( ', ' ) . '</p>'; 
			?>
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/get_the_tag_list/
			// echo to get the tag list that have this parameter '<p>Tags: ', ', ', '</p>' ; 
			?>
			<?php 
			  // method reference https://developer.wordpress.org/reference/functions/comment_form/
			// comment form(); 
			?>
		</section><!-- .entry-utility -->
		
	</article>

<?php // End the loop. ?>