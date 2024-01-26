<?php

get_header();
wp_reset_query();

global $post;

$args = array(
    'post_type' => $post->post_type,
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

            <div class="relative overflow-hidden [&_.wp-block-group]:w-full [&_.wp-block-gallery_img]:select-none [&_.wp-block-gallery_img]:cursor-zoom-in [&_.wp-block-gallery]:my-2 [&_.video-live_div]:flex-col [&_.video-live_div]:lg:flex-row [&_.video-live_div]:flex [&_.video-live_div]:gap-5 [&_.video_div]:flex-col [&_.video_div]:lg:flex-row [&_.video_div]:flex [&_.video_div]:gap-5">
                <?php the_content() ?>
            </div>
        <?php
        endwhile; ?>
    <?php
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
