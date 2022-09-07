<?php

/**
 * 
 */
get_header();

if (have_posts()) :

    while (have_posts()) :
        the_post();
        //whtever you want to do with the post
        get_template_part('template-parts/post/content');
    endwhile;

endif;

get_footer();
