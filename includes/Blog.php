<?php
$args = array(
    'post_type' => 'latest_news'
);

$posts = new WP_Query($args);

wp_reset_query();
?>
<main class="w-full lg:w-4/6 m-auto p-5 pt-0">
    <div class="flex w-full justify-between m-auto flex-wrap gap-5">
        <?php

        if ($posts->have_posts()) :
            while ($posts->have_posts()) : $posts->the_post();
        ?>
                <div class="relative drop-shadow-lg lg:drop-shadow-lg h-auto w-full group bg-[#08784a] flex-grow rounded-md lg:rounded-none lg:basis-1/4 overflow-hidden" style="opacity: 1;">
                    <img class="w-full h-full group-hover:scale-125 group-hover:rotate-6" src="<?php echo esc_url(get_the_post_thumbnail_url($posts->ID, 'full')) ?>">
                    <div class="absolute group-hover:flex hidden w-full h-full top-0 bg-[#08784a] bg-opacity-60 items-center">
                        <div class="m-auto text-center">
                            <h1 class="font-bold pb-2 text-2xl text-white"><?php the_title() ?></h1>
                            <a class="py-2 px-5 cursor-pointer hover:bg-[#fdb515] bg-[#08784a] drop-shadow-2xls rounded-full text-white" href="<?php echo get_permalink() ?>">
                                <button>View</button>
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        else :
            _e('Sorry, no posts were found.', 'textdomain');
        endif;
        ?>
    </div>
</main>