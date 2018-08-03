	</div><!-- .main -->
	
	<footer>
	
		<div class="fatfooter">
	
			<?php 

			// method reference https://developer.wordpress.org/reference/functions/is_active_sidebar/
			// Whether a sidebar is in use.
			if ( is_active_sidebar( 'first-footer-widget-area' ) ) { ?>
				<div class="one-third left widget-area first">
					<?php 
					// method reference https://developer.wordpress.org/reference/functions/dynamic_sidebar/
					// Display dynamic sidebar.
					dynamic_sidebar( 'first-footer-widget-area' );
					
					 ?>
				</div><!-- .first .widget-area -->
			<?php } ?>
		
			<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) { ?>
				<div class="one-third left widget-area second">
					<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
				</div><!-- .second .widget-area -->
			<?php } ?>
		
			<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) { ?>
				<div class="one-third left widget-area third">
					<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
				</div><!-- .third .widget-area -->
			<?php } ?>
	
		</div>
	
	</footer>
	
	<?php 
	// method reference https://developer.wordpress.org/reference/functions/wp_footer/
	// Prints scripts or data before the closing body tag on the front end.
	wp_footer(); 
	
	?>

</body>
</html>