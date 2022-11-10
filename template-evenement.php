<?php
/**
* Template Name: Evenement
*
* @package WordPress
* @subpackage igc_31w
*/
?>
 
<?php get_header() ?>

<main>
 
   <?php if (have_posts()): the_post(); ?>
      <h1>  <?php the_title() ?> </h1> 
        <?php the_content() ?>
         <p>venez nous rejoindre  au : <br> <?php the_field("adresse"); ?> </p>  
         <p>rendez-vous a : <br><?php the_field("date-heure"); ?> </p>               
   <?php endif ?>
</main>
<?php get_footer() ?>