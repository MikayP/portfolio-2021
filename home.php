<?php
/*
 * Template Name: Home page
 * description: >-
  Home Page
 */

get_header(); ?>

<div id="primary" class="site-content">
  <div id="home" role="main">
  <h1>Hi, I’m Mike! <br>
   I’m a Web Developer at Sailpoint. <br>
   Previously at Harris Media.</h1>
 <!-- <h1><?php single_post_title(); ?></h1> -->
 <?php
 while( have_posts() ):
  the_post();
  the_content();
endwhile; wp_reset_postdata();
?>
<div class="row work-row">

<h2>SOME OF MY CURRENT & PAST WORK</h2>
<?php $custom_query = new WP_Query('cat=2'); 
while($custom_query->have_posts()) : $custom_query->the_post(); ?>
    <a  href="test" <?php post_class(); ?> id="post-<?php the_ID(); ?>" target="_blank">


      <div class="col-xs-12 col-md-6 row-image" style="background-image:url(' <?php echo the_post_thumbnail_url(); ?> ');">
      <h3><?php the_title(); ?></h3>
  


    </div>
    </a>


<?php endwhile; ?>
</div>
<?php wp_reset_postdata(); // reset the query ?>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>