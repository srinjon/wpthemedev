<?php
/**
 * Contains the header
 */
// echo get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Document</title>
   
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/styles.css">
 

</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="ckeckbtn">
            <i class='fas fa-bars checkbtn'></i>
        </label>
        <?php $logoimg=get_header_image(); ?>
        <label class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo $logoimg;?>" alt=""></a></label>
        <ul>
            <!-- <li><a class="active" href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Feedback</a></li> -->
           <li> <?php wp_nav_menu(array('theme_location'=>'primany-menu')) ?></li>
        </ul>
    </nav>
 
    <!-- <section>
        
    </section> -->

