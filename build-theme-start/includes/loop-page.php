<?php  //Open the loop ?>
			
	<article id="post-<?php // the id ?>" <?php // post class ?>>
		
		<h2 class="entry-title"><a href="<?php // the permalink(); ?>"><?php // the title ?></a></h2>
		
		<section class="entry-content">
			<?php // the content(); ?>
		</section><!-- .entry-content -->	

		<section class="entry-utility">
			<?php // comment form(); ?>
		</section><!-- .entry-utility -->
		
	</article>

<?php // End the loop. ?>