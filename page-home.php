<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Home
 * @package _tk
 */

get_header(); ?>

<div class="desc-outer">

	<div class="about-me-desc">
	
		<div class="desc-top">

			<?php if( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endif; ?>
		
		</div>

	<div class="desc-middle">
		 <?php echo get_field('list_title'); ?>
		 <?php echo get_field('list_info'); ?>
	</div>

</div>
</div><!-- End Desc-Outer -->	

<?php get_footer(); ?>
