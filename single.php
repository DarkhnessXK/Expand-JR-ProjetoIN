<?php
get_header();

wpb_set_post_views(get_the_ID());

if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_title();
        the_content();
    }
}

get_footer();
?>