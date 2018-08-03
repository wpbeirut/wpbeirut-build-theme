<?php
/* The template file for dispalying static pages */
?>

<?php 

// method reference https://developer.wordpress.org/reference/functions/get_header/
// Load header template.
/*
Includes the header template for a theme or if a name is specified then a specialised header will be included.
For the parameter, if the file is called "header-special.php" then specify "special".
*/
get_header();

 ?>
		
	<div class="main">
		
		<div id="content" class="two-thirds left">

			<?php 
			// method reference https://developer.wordpress.org/reference/functions/get_template_part/
			// Loads a template part into a template.
			/*
			Provides a simple mechanism for child themes to overload reusable sections of code in the theme.
			Includes the named template part for a theme or if a name is specified then a specialised part will be included. If the theme contains no {slug}.php file then no template will be included.
			The template is included using require, not require_once, so you may include the same template part multiple times.
			For the $name parameter, if the file is called "{slug}-special.php" then specify "special".
			*/
			get_template_part( 'includes/loop', 'page' ); 
			?>

		</div><!-- #content -->

		
<?php 
// method reference https://developer.wordpress.org/reference/functions/get_sidebar/
// Load sidebar template.
/*
Includes the sidebar template for a theme or if a name is specified then a specialised sidebar will be included.
For the parameter, if the file is called "sidebar-special.php" then specify "special".
*/
get_sidebar();

 ?>

<?php 
// method reference https://developer.wordpress.org/reference/functions/get_footer/
// Load footer template.
/*
includes the footer template for a theme or if a name is specified then a specialised footer will be included.
For the parameter, if the file is called "footer-special.php" then specify "special".
*/
get_footer(); 
?>

