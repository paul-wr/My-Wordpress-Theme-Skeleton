<?php get_header(); ?>
    
    <?php 
    
    if( have_posts()):
        while( have_posts() ): the_post(); ?>
        <div class="span6">
            <div class="span8">
                <h1><?php the_title(); ?></h1>
                <p>Page template page.</p>
                
        </div>    

        <?php endwhile;
    endif;
    
    ?>
    
<?php get_footer(); ?>