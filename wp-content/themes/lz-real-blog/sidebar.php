<?php
/**
 * The sidebar containing the main widget area
 * @package WordPress
 * @subpackage lz-real-blog
 * @since 1.0
 * @version 0.3
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="sidebar" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
