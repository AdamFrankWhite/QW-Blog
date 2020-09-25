<?php get_header(); ?>
<div class="wrapper">
    <div class="cat-post-cont">




        <div>
            <?php
                $category = get_the_category();
                echo "<h2>" . $category[0]->cat_name . "</h2><hr>";
            ?>
            <?php 
            $args = array ( 'category' => the_category_ID($echo = false), 'posts_per_page' => 20);
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) :	setup_postdata($post);
        ?>

            <div class="cat-post-card">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail() ?></a>
                <div class="card-content">

                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>

                    <?php the_excerpt(); ?>
                </div>

            </div>
            <?php endforeach; 
        
        ?>
        </div>
    </div>



    <?php get_sidebar();?>
</div>

<?php wp_footer(); get_footer();?>