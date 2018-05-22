<?php get_header(); ?>
    
    <?php 
    
    if( have_posts() && is_home()):
        while( have_posts() ): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <span>Posted on: <?php the_time('F j, Y'); ?> at: <?php the_time('g:i a'); ?> in Category: <?php the_category(); ?></span>
            <p><?php the_content(); ?></p>
            <p><?php the_post_thumbnail(); ?></p>

        <?php endwhile;
    endif;
    
    ?>
    
<?php get_footer(); ?>