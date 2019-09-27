<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *Template Name: GSWeb
 * @package _tk
 */

get_header(); ?>

<section class="main animated fadeIn">
	<div class="row">
		<div id="about-text" class="col-sm-5 col-md-4 col-lg-5">
			<h1><?php  $title = get_field('title'); 
				echo $title; ?>
			</h1>
			
			<p class="subtext">
				<?php $sub_desc = get_field('sub_title'); 
					echo $sub_desc;?>						
			</p>

			<p class="description">
				<?php $desc = get_field('description', false, false); 
					echo $desc;?></p>
			
			<p class="description"><span class="subtext">Technologies:</span>
				<?php $technologies = 
					get_field('technologies'); echo ' '.$technologies; ?>
			</p>

			<p class="description">
				<a target=_"blank" href="<?php $link = get_field('link'); 
					echo $link; ?>">LAUNCH PROJECT</a>
			</p>

		</div>
		<div id="img-main" class="">		
			<img src="<?php $image = get_field('project_image'); 
				echo $image['url'];?>" />
		</div>
	</div>
</section>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
