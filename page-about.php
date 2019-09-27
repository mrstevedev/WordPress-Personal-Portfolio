<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: About
 *
 * @package _tk
 */

get_header(); 

?>

<section class="main animated fadeIn">
	<div class="row">
		<div id="about-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			
			
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>

		</div>	
		<div id="about-img" class="col-xs-12 col-sm-12 col-md-6">
			<img class="img-responsive" src="<?php $image = get_field('about_me_image'); echo $image['url'];?>" alt="About Steven Pulido | San Diego Web Developer" />
		</div>
	</div>
</section>

<?php get_footer(); ?>