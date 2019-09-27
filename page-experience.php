<?php
 /*
 * Template Name: Experience Form Template
 * This page should not be accessed on most occassions.
 * 
 * 
 */ 
?>
<?php get_header(); ?>

    <div class="form-reviews-container">

    
    <div class="form-reviews animated fadeIn">
        <h3>Review of Steven</h3>
        <p>Front-End<span class="ampersand-experience">&</span>Wordpress Developer</p>

        <p>Hello There! It was a pleasure working with you on the project. 
        <br/>Please leave me a review of how your experience has been.</p>
        <?php // append contact form to container div ?>
        <div>
            <?php echo do_shortcode('[wpforms id="307"]');?>
        </div>
    </div>
</div><!-- End Form Reviews Container -->

<?php get_footer(); ?>
