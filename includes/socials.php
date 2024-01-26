<?php

global $post;

get_header();
$args = array(
    'post_type' => 'social',
    'order' => 'ASC'
);

$posts = new WP_Query($args);
?>

<div class="">
    <ul class="flex flex-col gap-5 absolute bottom-4 p-3 lg:p-5">
        <?php
        $a = -1;
        if ($posts->have_posts()) :
            while ($posts->have_posts()) : $posts->the_post();
                $a++;
        ?>
                <li class="opacity-80 hover:opacity-100">
                    <a href="<?php echo get_post_meta($posts->posts[$a]->ID, 'link', true); ?>" target="_blank">
                        <img src="<?php the_post_thumbnail_url(); ?>" />
                    </a>
                </li>
        <?php
            endwhile;
        endif;

        wp_reset_query(); ?>
    </ul>
</div>