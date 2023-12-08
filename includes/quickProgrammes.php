<?php
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
);

$posts = new WP_Query($args);

wp_reset_query();
?>
<main class="w-full lg:w-4/6 m-auto p-5 pt-0">
    <div class="grid lg:grid-cols-3 justify-between gap-5">
        <?php

        if ($posts->have_posts()) :
            while ($posts->have_posts()) : $posts->the_post();
        ?>
                <a class="p-6 text-center cursor-pointer h-fit odd:flex-1 odd:bg-[#08784a] hover:odd:bg-[#fdb515] text-white even:bg-[#fdb515] hover:even:bg-[#08784a] rounded-3xl hover:drop-shadow-2xl" href="<?php echo get_permalink() ?>">
                    <h1 class="font-bold"><?php the_title() ?></h1>
                </a>
        <?php
            endwhile;
        else :
            _e('Sorry, no posts were found.', 'textdomain');
        endif;
        ?>
    </div>
</main>