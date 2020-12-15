<div class="blog-sidebar">
    <h3>Get the Book</h3>
    <hr>

    <a href="http://getbook.at/quittingweedebook"><img
            src="<?php bloginfo("template_url");?>/images/COVER-thedefinitiveguide.jpg" alt="book" /></a>
    <div class="stars">
        <img src="<?php bloginfo("template_url");?>/images/stars-trans.png" alt="stars" />
        <p>102 Reviews Average: 4.3/5</p>
    </div>
    <a href="http://getbook.at/quittingweedebook">
        <img class="amazon-btn" src="https://www.niftybuttons.com/amazon/amazon-button3.png"
            style="padding-left: 0.3em; padding-right: 0.3em;" alt="buy button">
    </a>

    <div class="sidebar-widget">
        <h3>Categories</h3>
        <?php wp_nav_menu( array( 'theme_location' => 'side-menu' ) );?>
    </div>
    <div class="sidebar-widget l-p">
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