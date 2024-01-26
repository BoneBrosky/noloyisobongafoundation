<?php

/*
Template Name: Page Contact
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

<main class="relative">
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
                <div class="w-full">
                    <?php the_content() ?>
                </div>

                <!-- <div class="absolute bottom-0 right-0 w-[100px] h-full select-none border-spacing-x-24 border-solid" style="border-left: 4px solid #00796B;">
                    <div class="w-full h-full" style="background-image: url(http://localhost:10004/wp-content/themes/select-few/img/topography-dark.svg);"></div>
                </div> -->

            </div>
    <?php
        endwhile;
    endif; ?>
    <?php get_template_part('./includes/contact') ?>
    <?php navSide() ?>
</main>

<?php get_footer();
