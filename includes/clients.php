<?php

global $post;

get_header();
$args = array(
    'post_type' => 'clients',
    'order' => 'ASC'
);

$posts = new WP_Query($args);

wp_reset_query();
?>
<div class="p-5 relative overflow-hidden">
    <div class="absolute -top-[99%] lg:top-[-92%] right-0 w-full h-[100%] select-none border-spacing-x-24 border-solid" style="border-bottom: 4px solid #00796B;">
        <div class="w-full h-full" style="background-image: url(http://localhost:10004/wp-content/themes/select-few/img/topography-dark.svg);"></div>
    </div>
    <div class="text-center mt-4">
        <h1 class="text-2xl font-bold text-[#009688]">Clients</h1>
        <p class="text-slate-600">We had a pleasure to work with.</p>
    </div>

    <div class="lg:flex gap-5 [&_img]:m-auto">
        <?php
        if ($posts->have_posts()) :
            while ($posts->have_posts()) : $posts->the_post();
        ?>
                <div class="relative opacity-70 hover:opacity-100">
                    <a href="#">
                        <img class="object-cover" src="<?php the_post_thumbnail_url(); ?>" />
                    </a>
                </div>
        <?php
            endwhile;
        endif; ?>
    </div>

</div>