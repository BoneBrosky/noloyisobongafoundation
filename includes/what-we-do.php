<?php

global $post;

get_header();
$args = array(
    'post_type' => 'what-we-do',
);

$posts = new WP_Query($args);

wp_reset_query();

function opacity($a)
{
    if ($a == 0) {
        echo  'lg:bg-opacity-20';
    } else if ($a == 1) {
        echo  'lg:bg-opacity-40';
    } else if ($a == 2) {
        echo  'lg:bg-opacity-60';
    } else if ($a == 3) {
        echo  'lg:bg-opacity-80';
    }
}
?>

<div class="w-full h-auto bg-black bottom-0 right-0 flex-col lg:flex-row lg:flex">
    <div class="bg-white w-auto h-full opacity-100 relative">
        <div class="absolute top-0 left-0 w-full h-full opacity-20 select-none" style="background-image: url(http://localhost:10004/wp-content/themes/select-few/img/topography-dark.svg);"></div>
        <h1 class="lg:text-5xl text-xl font-bold py-5 px-8 text-[#00796B] w-full text-center lg:text-left relative">See</br> Our <b>Services.</b></h1>
    </div>
    <div class="flex-col lg:flex-row lg:flex w-full text-white">
        <?php
        $a = -1;
        if ($posts->have_posts()) :
            while ($posts->have_posts()) : $posts->the_post();
                $a++;
        ?>
                <div class="bg-[#009688] <?php opacity($a); ?> hover:bg-opacity-100 transition-all w-full h-full flex flex-col items-center relative">
                    <div class="absolute top-0 left-0 w-full h-full opacity-10 select-none" style="background-image: url(http://localhost:10004/wp-content/themes/select-few/img/topography.svg);"></div>
                    <div class="m-auto p-5 relative">
                        <a href="<?php the_permalink() ?>">
                            <div class="block m-auto w-fit">
                                <span class="material-symbols-outlined text-5xl">
                                    <?php
                                    echo get_post_meta($posts->posts[$a]->ID, 'icon', true);
                                    ?>

                                </span>
                            </div>
                            <h1 class="lg:text-2xl text-center font-medium py-2"><?php the_title(); ?></h1>
                        </a>
                    </div>
                </div>
        <?php
            endwhile;
        endif; ?>
    </div>

</div>