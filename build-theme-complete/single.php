<?php
/* The file for displaying single posts */
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
			// method reference https://developer.wordpress.org/reference/functions/get_sidebar/
			// Is the query for an existing single post of any post type (post, attachment, page, custom post types)?
			// If the $post_types parameter is specified, this function will additionally check if the query is for one of the Posts Types specified.	
			if( is_singular( 'wpbeirut_book' ) ) {
				get_template_part( 'includes/loop', 'book' );
			}
			else {
				get_template_part( 'includes/loop', 'single' );
			}
			
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

