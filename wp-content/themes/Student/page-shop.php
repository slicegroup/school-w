<!-- <h2>page mi cuenta</h2> -->
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */


get_header(); ?>

<div class="container" style="margin-top: 100px;">
	<?php echo do_shortcode('[products limit="4" columns="2" orderby="popularity" class="quick-sale" on_sale="true" ]'); ?>
</div><!-- .wrap -->

<?php get_footer();

