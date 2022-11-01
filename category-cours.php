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
      
            <?php
                if ( have_posts() ) : 
                /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();?>
                        <h2>
                            <a href="<?php the_permalink();?> "><?php the_title();?></a>
                            <h4>dure du cours: <?php  the_field('duree')?> heures </h4>
                        </h2>
                        <?php
                        the_content(null, true);
                   
                    endwhile;
                endif;
            ?>
        
    </main>
 </body>

 <?php get_footer(); ?>
 </html>





