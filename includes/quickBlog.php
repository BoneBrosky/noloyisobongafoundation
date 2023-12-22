<?php
$args = array(
    'post_type' => 'latest_news'
);

$posts = new WP_Query($args);

wp_reset_query();
?>
<main class="w-full lg:w-4/6 m-auto p-5">
    <div class="mb-5">
        <h1 class="wp-block-heading text-center text-2xl pb-4 font-bold uppercase text-[#08784a]">NOLOYISO BONGA FOUNDATION</h1>



        <p><strong>Noloyiso Bonga Foundation</strong>&nbsp;is a&nbsp;<strong>non-profit organization</strong>&nbsp;based in Gqeberha, South Africa, dedicated to the&nbsp;<strong>development of sports in marginalised communities</strong>. The&nbsp;<strong>Noloyiso Bonga’s programmes</strong>&nbsp;are particularly focused on reaching people who are currently excluded from sport, such as&nbsp;<strong>women, people with disabilities</strong>, and people from&nbsp;<strong>low-income communities</strong>.</p>
    </div>
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
    <a href="<?php echo site_url('/blog') ?>">
        <button class="flex gap-2 items-center bg-[#fdb515] drop-shadow-2xl hover:bg-[#08784a] m-2 mt-6 mx-auto w-auto text-white py-2 px-16 rounded-full">Read more
            <span class=" w-6 h-6 block m-auto">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv fill-white" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ReadMoreIcon">
                    <path d="M13 7h9v2h-9zm0 8h9v2h-9zm3-4h6v2h-6zm-3 1L8 7v4H2v2h6v4z"></path>
                </svg>
            </span>
        </button>
    </a>
</main>