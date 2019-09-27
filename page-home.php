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
		<h1 style="font-size:28px;" class="">My name is <span class="hilite">Steve..</span> I am from <span class="hilite">Classy San Diego, California.</span><br>
	
		<span class="specialize-desc">I specialize in <a href="https://frontendmasters.com/books/front-end-handbook/2019/" class="hilite" target="_blank"><span>Front-End Development</span></a> using the <span class="hilite">lastest</span><span class="ampersand"> &</span> <span class="hilite"> greatest</span> tools.</span></h1>
		<h2 style="font-size:25px;" class="">I <i class="fa fa-heart" aria-hidden="true"></i> to <span class="hilite">code</span> <span class="ampersand">&</span> <span class="hilite">solve</span> problems.</h2>
	</div>

	<div class="desc-middle">
		 
		<h3 class="">As a Front-End Developer</h3>

			 <ul class="front-end-list">
				<li>Javascript</li>
				<li>React</li>
				<li>Nodejs</li>
				<li>Performance</li>
				<li>Wordpress</li>
			 </ul>
	</div>

	<!--<div class="desc-bottom">
		
		<h3 class="">Download My Resume</h3>
		
		<a target="_blank" class="hvr-icon-sink-away" href="<?php bloginfo('url')?>/wp-content/uploads/2018/11/Pulido_Steven_Resume_November2018.pdf"></a>
		
	</div>-->
</div>
</div><!-- End Desc-Outer -->	

<?php get_footer(); ?>
