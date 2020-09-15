<?php get_header(); ?>
<div class="wrapper">
    <div class="main-cont">
        <div class="post-cont">
            <?php 
            $args = array ( 'posts_per_page' => 20);
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) :	setup_postdata($post);
        ?>
            <div class="post-card">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail() ?></a>
                <div class="post-content">

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