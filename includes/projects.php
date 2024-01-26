<?php

global $post;

get_header();
$args = array(
    'post_type' => 'projects',
    'posts_per_page' => 6,
    'orderby' => 'rand'
);

$posts = new WP_Query($args);
$projectLead = get_post_meta($posts->posts[0]->ID, 'project_lead', true);

wp_reset_query();
?>
<div class="lg:flex flex-col lg:flex-row overflow-hidden">
    <?php
    if ($posts->have_posts()) :
        while ($posts->have_posts()) : $posts->the_post();
    ?>
            <div class="relative project group hover:flex-none overflow-hidden projects h-[260px] lg:h-[566px]">
                <img class=" h-full w-full object-cover group-hover:scale-110" src="<?php the_post_thumbnail_url('header-image'); ?>" />
                <div class="bg-black hover:bg-[#009688] bg-opacity-50 hover:bg-opacity-50 absolute top-0 left-0 h-full w-full"></div>
                <div class="absolute w-max lg:w-fit top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-project">
                    <h1 class="font-bold text-2xl text-[#009688] group-hover:text-white transition-none my-4"><?php the_category() ?></h1>
                    <p class="text-white gap-2 items-center uppercase text-xs font-bold lg:hidden group-hover:flex"><?php echo date('y-m-d') . '<span> | </span>' . '<span class="text-[#009688] group-hover:text-white"> Project Lead: ' . $projectLead . '</span>' ?></p>
                    <h1 class="font-bold text-2xl text-white"><?php the_title() ?></h1>
                    <button class="w-full lg:w-fit text-sm bg-[#009688] rounded-full py-2 px-5 hover:px-8 block text-white my-5 uppercase shadow-md hover:shadow-lg hover:shadow-[#009688] shadow-[#009688]"><a href='<?php the_permalink() ?>'>view project</a></button>
                </div>
            </div>
    <?php
        endwhile;
    endif; ?>
</div>