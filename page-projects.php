<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Projects
 * @package _tk
 */

get_header(); ?>

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

		<div class="projects-right col-xs-12 col-sm-12 col-md-6 col-lg-6">

<?php

/* 
 * Paginate Advanced Custom Field repeater
 */

if( get_query_var('page') ) {
  $page = get_query_var( 'page' );
} else {
  $page = 1;
}

// Variables
$row              = 0;
$images_per_page  = 6; // How many images to display on each page
$projects         = get_field( 'projects' );
$total            = count( $projects );
$pages            = ceil( $total / $images_per_page );
$min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
$max              = ( $min + $images_per_page ) - 1;


// ACF Loop
if( have_rows( 'projects' ) ) : ?>

  <?php while( have_rows( 'projects' ) ): the_row();

    $row++;

    // Ignore this image if $row is lower than $min
    if($row < $min) { continue; }

    // Stop loop completely if $row is higher than $max
    if($row > $max) { break; } ?>  

   	<div class="col-sm-3 col-md-4 col-lg-4">
    	<ul class="thumbs">     
	    	<?php $img_obj = get_sub_field( 'image' ); ?>
	    	<?php $img_url_path = get_sub_field( 'page_link' ); ?>
	    	<?php $img_title = get_sub_field( 'title' ); ?>
	    	<a href="<?php echo $img_url_path; ?>">
	      		<img src="<?php echo $img_obj['sizes']['medium']; ?>" alt="">
				<div class="description">
					<h4><?php echo $img_title; ?></h4>
				</div>
	   		 </a>
   		 </ul>
	</div>    	

  <?php endwhile; ?>

  <div class="pagination col-xs-11 col-sm-12 col-md-11 col-lg-12">
  <?php
	  echo paginate_links( array(
	    'base' => get_permalink() . '%#%' . '/',
	    'format' => '?page=%#%',
	    'current' => $page,
	    'total' => $pages
	  ) );
  ?>
</div><!-- End Pagination-->
</div><!-- End Projects Right -->
<?php else: ?>

  <!--No images found-->

<?php endif; ?>

<?php

// foreach($projects as $project){
// 	var_dump($project['title']);
// 	var_dump($project['page_link']);
// 	var_dump($project['image']['sizes']['medium']);
// }
?>
</section>

<?php get_footer(); ?>
