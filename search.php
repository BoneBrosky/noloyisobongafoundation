<?php

get_header();
global $post;
wp_reset_postdata()
?>

<main class="relative overflow-hidden" style="opacity: 1;">
    <div class="relative h-[450px] overflow-hidden" style="background-image: url(http://localhost:10004/wp-content/uploads/2024/01/bg02.jpg); background-attachment: fixed; background-size:cover; background-position: center;">
        <div class="flex items-center h-full w-full relative z-10">
            <h1 class="relative text-4xl font-bold text-white uppercase drop-shadow-md w-fit m-auto">
                SEARCH RESULTS
                <hr class="border-white mr-[60%] border-2" />
                <i class="text-white text-center block text-sm mt-4"><?php printf(__('for: %s', 'Bouwercorp'), '<strong class=" text-[#fdb515]">' . get_search_query() . '</strong>'); ?></i>
            </h1>
        </div>
        <div class="absolute top-0 left-0 w-full h-full opacity-10 select-none" style="background-image: url(http://localhost:10004/wp-content/themes/select-few/img/topography.svg);"></div>
        <div class="absolute bottom-0 left-0 bg-gradient-to-t from-[#009688] to-transparent h-full w-full opacity-80"></div>
    </div>

    <main class="relative">
        <div class="w-full lg:w-4/6 m-auto p-5 ">
            <div class="lg:w-3/4 w-full h-full m-auto my-0">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="my-5 flex-col group lg:flex-row transition-none">
                            <div class=" flex gap-5 items-center">
                                <?php if (has_post_thumbnail($post->ID)) : ?>
                                    <a class="" href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail('thumbnail') ?>
                                    </a>
                                <?php endif ?>
                                <div>
                                    <a href="<?php the_permalink() ?>">
                                        <h1 class="text-lg lg:text-3xl text-left font-bold group-odd:text-[#00796B] group-odd:hover:text-[#009688] group-even:text-[#009688] group-even:hover:text-[#00796B]"><?php the_title() ?></h1>
                                    </a>
                                    <span class='italic pb-5 text-slate-500 text-xs'>by <b><?php the_author() ?></b> <b class="text-[#00796B]">•</b> pulished on <b><?php the_time('d.m.y') ?></b></span>
                                </div>
                            </div>
                            <hr class="border-[#BDBDBD] group-last-of-type:hidden border-1 mt-5 w-auto">
                        </div>
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                <?php else : ?>
                    <div class="s-results-content else">
                        <img class="w-[200px] lg:w-[300px] m-auto" src="<?php echo get_theme_root_uri() ?>/select-few/img/search-no-result-not-found-concept-illustration-flat-design-eps10-modern-graphic-element-for-landing-page-empty-state-ui-infographic-icon-vector.jpg" />
                        <figure class="s-result-block" style="width: 100%;">
                            <h1 class="lg:text-2xl text-center"><?php _e('<strong>' . 'Sorry, but nothing matched your search term(s). Please try again with some different keywords.' . '</strong>', 'Bouwercorp'); ?><span class="lnr lnr-warning"></span></h1>
                        </figure>
                    </div>
                <?php endif; ?>
            </div>
            <div class="absolute bottom-0 -right-[12%] lg:right-0 w-[15%] h-full select-none border-spacing-x-24 border-solid" style="border-left: 4px solid #00796B;">
                <div class="w-full h-full" style="background-image: url(http://localhost:10004/wp-content/themes/select-few/img/topography-dark.svg);"></div>
            </div>
        </div>
    </main>
    <?php navSide() ?>
</main>

<?php get_footer();
