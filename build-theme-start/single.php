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
// call the header method

 ?>
		
	<div class="main">
		
		<div id="content" class="two-thirds left">

			<?php 
			// method reference https://developer.wordpress.org/reference/functions/get_sidebar/
			// Is the query for an existing single post of any post type (post, attachment, page, custom post types)?
			// If the $post_types parameter is specified, this function will additionally check if the query is for one of the Posts Types specified.	
			// check if the post singular is book post type display the loop related to the post
			// in case not get the regular loop from the include file.
			
			?>

		</div><!-- #content -->

		
<?php 
// method reference https://developer.wordpress.org/reference/functions/get_sidebar/
// Load sidebar template.
/*
Includes the sidebar template for a theme or if a name is specified then a specialised sidebar will be included.
For the parameter, if the file is called "sidebar-special.php" then specify "special".
*/
// get the side bar

 ?>

<?php 
// method reference https://developer.wordpress.org/reference/functions/get_footer/
// Load footer template.
/*
includes the footer template for a theme or if a name is specified then a specialised footer will be included.
For the parameter, if the file is called "footer-special.php" then specify "special".
*/
// get the footer
?>

