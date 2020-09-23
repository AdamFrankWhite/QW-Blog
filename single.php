<?php
/**
* A Simple Category Template
*/
 
get_header(); ?>
<div class="wrapper">
    <div class="main-cont">
        <div class="single-post">
            <h1><?php the_title();?></h1>
            <hr>
            <?php the_post_thumbnail(); ?>



            <?php the_content(); ?>
        </div>

    </div>

    <?php get_sidebar(); ?>
</div>


<?php wp_footer(); get_footer();?>