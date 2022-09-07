<?php

/**
 * 
 */
get_header();

if (have_posts()) :

    while (have_posts()) :
        the_post();
    //whtever you want to do with the post
    endwhile;

endif;

get_footer();
