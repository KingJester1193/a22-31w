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
        <?php "<h1>" . the_title() . "</h1>" ?>
        <?php the_content() ?>
         <p>venez nous rejoindre  au <?php the_field("adresse"); ?> </p>            
   <?php endif ?>
</main>
<?php get_footer() ?>