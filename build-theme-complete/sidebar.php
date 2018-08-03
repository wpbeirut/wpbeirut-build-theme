<aside class="sidebar one-third right">
	
	<?php
	// method reference https://developer.wordpress.org/reference/functions/is_active_sidebar/
	// Whether a sidebar is in use.
	 if ( is_active_sidebar( 'sidebar-widget-area' ) ) { ?>
	
		<aside class="widget-area">
				<?php 
				// method reference https://developer.wordpress.org/reference/functions/dynamic_sidebar/
				// Display dynamic sidebar.
				dynamic_sidebar( 'sidebar-widget-area' ); 
				?>
		</aside>
		
	<?php } //end of conditional content ?>

</aside>