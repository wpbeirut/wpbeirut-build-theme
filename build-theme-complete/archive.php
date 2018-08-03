<?php
/* The file for displaying archive pages */
?>

<?php 
// method reference https://developer.wordpress.org/reference/functions/get_header/
get_header(); 
?>
		
	<div class="main">
		
		<div id="content" class="two-thirds left">
			
			<h2><?php 
			// method reference https://developer.wordpress.org/reference/functions/the_archive_title/
			the_archive_title(); 
			?></h2>			
			<?php
			// method reference https://developer.wordpress.org/reference/functions/is_tax/
			/* Is the query for an existing custom taxonomy archive page?
				 If the $taxonomy parameter is specified, this function will additionally check if the query is for that specific $taxonomy.
				 If the $term parameter is specified in addition to the $taxonomy parameter, this function will additionally check if the query is for one of the terms specified.
			*/
			if( is_tax( 'wpbeirut_genre' ) ) {
			// method reference https://developer.wordpress.org/reference/functions/get_template_part/
				get_template_part( 'includes/loop', 'genre' );
			}
			else {
				get_template_part( 'includes/loop', 'archive' );
			}
			?>
			
		</div><!-- #content -->

		
<?php 
// method reference https://developer.wordpress.org/reference/functions/get_slidebar/
get_sidebar();
 ?>

<?php 
// method reference https://developer.wordpress.org/reference/functions/get_footer/
get_footer(); 
?>

