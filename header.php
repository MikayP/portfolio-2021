<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->

</head>
<body <?php body_class(); ?>>
<?php
function consultation_button(){
?>
    <a class="consulation-button">Schedule Consultation</a>
<?php
}?>

<nav>
<div class="hamburger">
  <span></span>
</div>
<?php $args = [ 'theme_location' => 'primary' ];
wp_nav_menu( $args ); 
?>

</nav>

