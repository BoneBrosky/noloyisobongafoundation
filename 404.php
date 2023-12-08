<?php

/*
Template Name: Page 404
*/

get_header();
$args = array(
    'post_type' => 'page',
    'pagename' => '404 page'
);

$posts = new WP_Query($args);

wp_reset_query();
?>

<main style="opacity: 1;">
    <?php if ($posts->have_posts()) {
        while ($posts->have_posts()) {
            $posts->the_post(); ?>
            <main class="w-full lg:w-4/6 m-auto p-5">
                <div class="mb-5">
                    <?php the_content(); ?>
                </div>
            </main>

    <?php }
    } ?>
</main>



<?php get_footer();
