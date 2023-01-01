<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    img{
        height: 35%;
    }
  </style>
</head>
<body>
    

<?php
get_header();
// the_post();Optional
?>
<!-- <section> -->
    <?php the_post_thumbnail(array(500,500)); ?>
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
<!-- </section> -->
<!-- <div><a href="about.html">About</a></div> -->

<?php
get_footer();

?>
</body>
</html>