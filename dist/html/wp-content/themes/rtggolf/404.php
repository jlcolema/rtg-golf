<?php
/**
 * The template for displaying the 404 template in the RTG Golf theme.
 *
 * @package WordPress
 * @subpackage RTG_Golf
 * @since RTG Golf 1.0
 */

get_header();
?>

	<h1 class="entry-title"><?php _e( 'Page Not Found', 'rtggolf' ); ?></h1>

	<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'rtggolf' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'rtggolf' ),
			)
		);
		?>

<?php
get_footer();
