<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Project-Vistage
 * @package _tk
 */

get_header(); ?>

<section class="main animated fadeIn section-1">
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
			<?php  if( have_rows( 'project_images' ) ) : ?>
              <?php while( have_rows( 'project_images' ) ): the_row(); ?>
              <img title="Custom Gutenberg Block" class="img-responsive" src="<?php $image = get_field('project_main_image'); echo $image['url'];?>" alt="Discogs Load More" />
          <div id="project-views" class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
              <?php echo get_field('project_views');?>
          </div>
                <?php endwhile; ?>
            <?php endif; ?>
      </div>
     
	</div>
        <div class="project-gutenburg-block-bottom">
            <img title="More Content" src="<?php echo bloginfo('url') ?>/wp-content/uploads/2019/09/arrow-down-thin.svg" />
        </div>
</section>

<section id="two-project-about" data-aos="fade-up"  data-aos-offset="200">    
    <h3>My Custom Built Blocks</h3>
    <div class="project-carousel">
        <div id="project-1" class="row project" style="visibility: visible">
                <div id="about-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-5 left-text">
                    <h1 class="page-title">
                        <?php echo get_field('testimonial_block_about_title') ?>
                    </h1>
                <?php echo get_field('testimonial_block_about_text') ?>           
                </div>
                <div id="vistage-image" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <?php if( have_rows( 'project_images' ) ) : ?>
                        <?php while( have_rows( 'project_images' ) ): the_row(); ?>
                            <img class="img-responsive" src="<?php $image = get_sub_field('image_1'); echo $image['url'];?>" alt="Custom Gutenberg Block" />
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

        </div><!-- end row -->
        <div id="project-2" class="row project" style="visibility: hidden">
                <div id="about-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-5 left-text">
                    <h1 class="page-title">
                        <?php echo get_field('full_width_image_block_about_title') ?>
                    </h1>
                    <?php echo get_field('full_width_image_block_about_text') ?>           
                    </div>
                    <div id="vistage-image" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <?php  if( have_rows( 'project_images' ) ) : ?>
                            <?php while( have_rows( 'project_images' ) ): the_row(); ?>
                                <img class="img-responsive" src="<?php $image = get_sub_field('image_2'); echo $image['url'];?>" alt="Custom Gutenberg Block" />
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
        </div><!-- end row -->
        <div id="project-3" class="row project" style="visibility: hidden">
            <div id="about-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-5 left-text">
                <h1 class="page-title">
                    <?php echo get_field('text_bullet_block_title') ?>
                </h1>
                <?php echo get_field('text_bullet_block_text') ?>           
            </div>
            <div id="vistage-image" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <?php  if( have_rows( 'project_images' ) ) : ?>
                    <?php while( have_rows( 'project_images' ) ): the_row(); ?>
                        <img class="img-responsive" src="<?php $image = get_sub_field('image_3'); echo $image['url'];?>" alt="Custom Gutenberg Block" />
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div><!-- end row -->
        <div id="project-4" class="row project" style="visibility: hidden">
                <div id="about-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-5 left-text">
                    <h1 class="page-title">
                        <?php echo get_field('4_square_image_left_title') ?>
                    </h1>
                    <?php echo get_field('4_square_image_left_text') ?>           
                    </div>
                    <div id="vistage-image" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <?php  if( have_rows( 'project_images' ) ) : ?>
                            <?php while( have_rows( 'project_images' ) ): the_row(); ?>
                                <img class="img-responsive" src="<?php $image = get_sub_field('image_4'); echo $image['url'];?>" alt="Custom Gutenberg Block" />
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
        </div><!-- end row -->
        <div id="project-5" class="row project" style="visibility: hidden">
                <div id="about-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-5 left-text">
                    <h1 class="page-title">
                        <?php echo get_field('1_column_testimonial_block_title') ?>
                    </h1>
                    <?php echo get_field('1_column_testimonial_block_text') ?>           
                    </div>
                    <div id="vistage-image" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <?php  if( have_rows( 'project_images' ) ) : ?>
                            <?php while( have_rows( 'project_images' ) ): the_row(); ?>
                                <img class="img-responsive" src="<?php $image = get_sub_field('image_5'); echo $image['url'];?>" alt="Custom Gutenberg Block" />
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
        </div><!-- end row -->
        <div id="project-6" class="row project" style="visibility: hidden">
                <div id="about-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-5 left-text">
                    <h1 class="page-title">
                        <?php echo get_field('numbered_list_block_title') ?>
                    </h1>
                    <?php echo get_field('numbered_list_block_text') ?>           
                    </div>
                    <div id="vistage-image" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <?php  if( have_rows( 'project_images' ) ) : ?>
                            <?php while( have_rows( 'project_images' ) ): the_row(); ?>
                                <img class="img-responsive" src="<?php $image = get_sub_field('image_6'); echo $image['url'];?>" alt="Custom Gutenberg Block" />
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
        </div><!-- end row -->
    </div><!-- end project carousel -->

    <!-- Carousel Buttons -->
    <div class="project-carousel-buttons">
        <ul>
            <li>
                <a href="#!" class="carousel-btn active" rel="project-1"></a>
            </li>
            <li>
                <a href="#!" class="carousel-btn" rel="project-2"></a>
            </li>
            <li>
                <a href="#!" class="carousel-btn" rel="project-3"></a>
            </li>
            <li>
                <a href="#!" class="carousel-btn" rel="project-4"></a>
            </li>
            <li>
                <a href="#!" class="carousel-btn" rel="project-5"></a>
            </li>
            <li>
                <a href="#!" class="carousel-btn" rel="project-6"></a>
            </li>
        </ul>
    </div>
    <!-- End Carousel -->
</section>

<section id="three-project-challenges">
    <div class="row double-row">
            <div id="about-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-6" data-aos="fade-right">
                <?php  if( have_rows( 'project_challenge_images' ) ) : ?>
                    <?php while( have_rows( 'project_challenge_images' ) ): the_row(); ?>
                        <img class="img-responsive" src="<?php $image = get_sub_field('image_1'); echo $image['url'];?>" alt="Custom Gutenberg Block" />
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
                <div id="about-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-4 challenge-text" data-aos="fade-left">
                    <h1 class="page-title">
                        <?php echo get_field('project_challenge_title') ?>
                    </h1>
                <?php echo get_field('project_challenge_text') ?>           
            </div>
    </div>
    <div class="row double-row">            
            <div id="about-text" class="col-xs-12 col-sm-12 col-md-6 col-lg-5 left-text" data-aos="fade-right">
                <h1 class="page-title">
                    <?php echo get_field('project_gutenberg_dashboard_title') ?>
                </h1>
                <?php echo get_field('project_gutenberg_dashboard_text') ?>           
            </div>
            <div id="vistage-image" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <?php  if( have_rows( 'auto_css_carousel' ) ) : ?>
                    <?php while( have_rows( 'auto_css_carousel' ) ): the_row(); ?>
                    <div class="slider">
                        <div class="slide-1">
                            <img data-aos="fade-left" class="img-responsive" src="<?php $image = get_sub_field('block_testimonial_video_block'); echo $image['url'];?>" alt="Custom Gutenberg Block" />
                        </div>
                        <div class="slide-2">
                            <img data-aos="fade-left" class="img-responsive" src="<?php $image = get_sub_field('block_add_block_menu'); echo $image['url'];?>" alt="Custom Gutenberg Block" />
                        </div>
                        <div class="slide-3">
                            <img data-aos="fade-left" class="img-responsive" src="<?php $image = get_sub_field('block_add_block_title'); echo $image['url'];?>" alt="Custom Gutenberg Block" />
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
     </div>    
</section>
    <div class="back-to-top animated">
        <a href="#0" class="backtotopBtn">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </a>
     </div>

<?php get_footer(); ?>
