<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Project-Mac
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

        <div class="project-right col-xs-12 col-sm-12 col-md-6">		 
          <div id="project-img-mac" class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
			<div class="frame">
			<?php  if( have_rows( 'project_images' ) ) : ?>

              <?php while( have_rows( 'project_images' ) ): the_row(); ?>

              <img class="img-responsive" src="<?php $image = get_sub_field('image_1'); echo $image['url'];?>" alt="Discogs Load More" />
          		
            </div>            
          </div>
          <div id="project-views" class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
              <?php echo get_field('project_views');?>
          </div>
                <?php endwhile; ?>
            <?php endif; ?>

      </div>
	</div>

</section>

<?php get_footer(); ?>
