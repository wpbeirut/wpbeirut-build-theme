<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en-US" class="ie6"><![endif]-->
<!--[if IE 7]><html lang="en-US" class="ie7"><![endif]-->
<!--[if IE 8]><html lang="en-US" class="ie8"><![endif]-->
<!--[if IE 9]><html lang="en-US" class="ie9"><![endif]-->
<!--[if gt IE 9]><html lang="en-US"><![endif]-->
<!--[if !IE]><html lang="en-US"><![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<?php
// method reference https://developer.wordpress.org/reference/functions/bloginfo/
// Filters the site information returned by get_bloginfo().
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php // use the bloginfo method to call the stylesheet_url ?>" />
<link href="https://fonts.googleapis.com/css?family=Assistant|Oswald" rel="stylesheet">

<?php 
// method reference https://developer.wordpress.org/reference/functions/wp_head/
// Prints scripts or data before the closing head tag on the front end.
// call the wp head method
?>
</head>
<?php // method reference https://developer.wordpress.org/reference/functions/body_class/ ?>
<body <?php // call the body class method  ?>>
	
	<div class="header-bg">
	
		<header role="banner">
	
			<hgroup class="site-name three-quarters left">
				<?php
				// method of esc attribute reference https://developer.wordpress.org/reference/functions/esc_attr/
				// Escaping for HTML attributes.
				// method to get_bloginfo reference https://developer.wordpress.org/reference/functions/get_bloginfo/
				// Retrieves information about the current site.
				?>
				<!-- site name and description -->
				<h1 id="site-title">
					<a href="<?php echo site_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
				
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			
			</hgroup>
	
			<div class="right quarter">
								
					<a class="toggle-nav" href="#">&#9776;</a>
					
			</div> <!-- .right quarter -->
		
		</header><!-- header -->
		
	</div><!-- header-bg-->
	
	<!-- full width navigation menu -->
	<nav class="menu main">
	<?php
	// method for  esc_attr_e reference https://developer.wordpress.org/reference/functions/esc_attr_e/
	// Display translated text that has been escaped for safe use in an attribute.
	// method for  _e reference https://developer.wordpress.org/reference/functions/_e/
	// Display translated text.
	?>
		<div class="skip-link screen-reader-text">
			<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'wpbeirut' ); ?>"><?php _e( 'Skip to content', 'wpbeirut' ); ?></a>
		</div>
		
		<?php 
		// method for the navigation menu reference https://developer.wordpress.org/reference/functions/wp_nav_menu/
		// Displays a navigation menu.
		// call the wp nav menu method that have the following array array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ?>
			
	</nav><!-- .main -->