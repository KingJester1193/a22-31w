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


    <style>body{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
}

h1{
    background-color: rgb(35, 156, 116);
    color: rgb(255, 166, 0);
    font-size: 2em;
}</style>



    <title>Document blal bcscale</title>
 </head>
 <body>
    <main class="site__main">
      
            <?php
                if ( have_posts() ) : 
                /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();
                        the_title( "<h2>", "</h2>");
                        the_content(null, true);?>
                        <section>
                            <small>
                               <span> <?php the_weekday();?></span>
                                <span><?php the_date();?></span>
                                <span><?php the_time();?></span>
                            </small>
                            <code><?php the_author(); ?></code>
                            <pre><?php the_category();?></pre>
                        </section>
                        <?php
                    endwhile;
                endif;
            ?>
        
    </main>
 </body>

 <?php get_footer(); ?>
 </html>





