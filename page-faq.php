<?php

/*
Template Name: Page FAQs
*/

get_header();
wp_reset_query();

global $post;

$args = array(
    'page_id' => $post->ID
);

$posts = new WP_Query($args);

wp_reset_query();
?>

<main class="relative [&_.column-text-container_.wp-block-heading]:px-5 [&_.column-text-container_.wp-block-heading]:lg:px-20 [&_.column-text-container_div_.wp-block-buttons]:p-0 [&_.wp-block-column_article]:p-5 [&_.wp-block-column_article]:lg:py-0 [&_.wp-block-cover_.wp-block-button]:w-auto [&_.wp-block-group]:p-0 [&_.w-half]:w-full [&_.w-half]:lg:w-1/2">
    <?php
    if ($posts->have_posts()) :
        while ($posts->have_posts()) : $posts->the_post();
    ?>
            <div class="relative h-[450px] overflow-hidden" style="background-image: url(<?php the_post_thumbnail_url('header-image') ?>); background-size:cover;background-position-x: center;">
                <div class="flex items-center w-full h-full m-auto relative z-10">
                    <div class="m-auto w-[75%] lg:w-fit">
                        <h1 class="relative text-4xl font-bold text-white uppercase drop-shadow-md w-fit m-auto"><?php the_title() ?>
                            <hr class="border-white mr-[60%] border-2" />
                        </h1>
                    </div>
                </div>
                <div class="absolute top-0 left-0 w-full h-full opacity-10 select-none" style="background-image: url(http://localhost:10004/wp-content/themes/select-few/img/topography.svg);"></div>
                <div class="absolute bottom-0 left-0 bg-gradient-to-t from-[#009688] to-transparent h-full w-full opacity-80"></div>
            </div>

            <div class="relative">
                <div class="w-full [&_.wp-block-group]:px-5 [&_.wp-block-group]:lg:px-0">
                    <?php the_content() ?>
                </div>
            </div>
    <?php
        endwhile;
    endif; ?>
    <?php
    $isGalleryON = get_post_field('toggle_projects');
    if ($isGalleryON == 1) {
        echo get_template_part('./includes/projects');
    }
    ?>
    <?php navSide() ?>
</main>

<?php get_footer();
