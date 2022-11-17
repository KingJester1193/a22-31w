<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */
?>


<?php get_header(); ?>

 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <title>Document julien P</title>
 </head>
 <body>
    <main class="site__main">
        <section class="grid_cours">


            <?php
                if ( have_posts() ) : 
                /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();?>
                        <article class="liste_cours">
                        <h2>
                            <a href="<?php the_permalink();?> "><?php $title = the_title('','',FALSE); echo substr($title, 8, -6); ?></a></h2> </a>
                        </h2>
                            
                            <h4>dure du cours: <?php  the_field('duree')?> heures </h4>
                            <h4>Nom: <?php  the_field('professeur')?></h4>
                            <h4>Cour offert le :  <?php  the_field('periode')?></h4>
                            <p><?php  echo wp_trim_words( get_the_excerpt(), 30,"...");    ?></p>
                       </article> <?php

                    endwhile;
                endif;
            ?>  
                </section>
    </main>
 </body>

 <?php get_footer(); ?>
 </html>





