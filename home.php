<?php
/*
 * Template Name: Home page
 * description: >-
  Home Page
 */

get_header(); ?>

<div id="primary" class="site-content">
  <div id="home" role="main">

 <h1>Home</h1>
<div class="row work-row">
<?php $custom_query = new WP_Query('cat=2'); 
while($custom_query->have_posts()) : $custom_query->the_post(); ?>
    <a  <?php post_class(); ?> id="post-<?php the_ID(); ?>" href="test">
	<div >

      <div class="col-xs-12 col-md-6" style="background-image:url(' <?php echo the_post_thumbnail_url(); ?> ');">
      <h3><?php the_title(); ?></h3>
  

</div>
    </div>
    </a>


<?php endwhile; ?>
</div>
<?php wp_reset_postdata(); // reset the query ?>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>