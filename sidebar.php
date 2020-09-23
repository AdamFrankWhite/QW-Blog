<div class="blog-sidebar">

    <a href="http://getbook.at/quittingweedebook"><img
            src="<?php bloginfo("template_url");?>/images/COVER-thedefinitiveguide.jpg" alt="book" /></a>

    <div class="sidebar-widget">
        <h3>Categories</h3>
        <?php wp_nav_menu( array( 'theme_location' => 'side-menu' ) );?>
    </div>
    <div class="sidebar-widget">
        <h3>Latest Posts</h3>
        <?php 
            $args = array ( 'posts_per_page' => 5);
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) :	setup_postdata($post);
        ?>

        <ul>
            <a href="<?php the_permalink();?>"></a>


            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>



        </ul>
        <?php endforeach; 
        
        ?>
    </div>
</div>