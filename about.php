<?php
/*
 * Template Name: About Page
 * description: >-
  About Page
 */

get_header(); ?>

<div id="primary" class="site-content">
  <div id="about" role="main">
 

<div class="row about-row">
<div class="col-xs-12 col-md-6 bg-image" style="background-image:url(' <?php echo the_post_thumbnail_url(); ?> ');">



    </div>


<div class="col-xs-12 col-md-6 content"> 

  
<h1><?php the_field('title'); ?></h1> 

<?php
 while( have_posts() ):
 
  the_post();   
  the_content(); ?>
</div>
  <?php endwhile; wp_reset_postdata(); ?>




</div>

<?php wp_reset_postdata(); // reset the query ?>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>