<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_100
 */

if ( ! is_active_sidebar( 'sidebar-left' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area secondary-left" role="complementary">
	<?php dynamic_sidebar( 'sidebar-left' ); ?>
</div><!-- #secondary -->
