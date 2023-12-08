<?php

/*
Template Name: Page Search
*/

get_header();
global $post;
?>

<main style="opacity: 1;">
    <main class="flex flex-col relative h-[200px] lg:h-[300px] border-b-4 border-[#fdb515] overflow-hidden" style="background-image: url(&quot;https://noloyisobongafoundation.org/wp-content/uploads/2023/10/vision.jpeg&quot;); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="bg-[#08784a] py-auto lg:px-[30px] bg-opacity-25 lg:bg-opacity-50 h-full m-auto w-full m-0 absolute right-0 flex items-center">
            <div class="w-full text-right  p-5 lg:pl-0 lg:pr-10">
                <h1 class="text-white text-center font-bold text-4xl">SEARCH RESULTS</h1>
                <i class="text-white text-center hidden lg:block"><?php printf(__('for: %s', 'Bouwercorp'), '<strong class=" text-[#fdb515]">' . get_search_query() . '</strong>'); ?></i>
            </div>
        </div>
    </main>
    <main class="w-full lg:w-4/6 m-auto p-5">
        <div class="lg:w-3/4 w-full h-full m-auto my-0 overflow-auto">
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
                                    <h1 class="text-lg lg:text-3xl text-left font-bold group-odd:text-[#08784a] group-odd:hover:text-[#fdb515] group-even:text-[#fdb515] group-even:hover:text-[#08784a]"><?php the_title() ?></h1>
                                </a>
                                <span class='italic pb-5 text-slate-500 text-xs'>by <b><?php the_author() ?></b> <b class="group-odd:text-[#fdb515] group-even:text-[#08784a]">•</b> <?php the_modified_date() ?></span>
                            </div>
                        </div>
                        <hr class="border-[#fdb515] group-last-of-type:hidden border-1 mt-5 w-auto">
                    </div>
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else : ?>
                <div class="s-results-content else">
                    <img class="w-[200px] lg:w-[300px] m-auto" src="<?php echo get_theme_root_uri() ?>/noloyisobongafoundation/img/search-no-result-not-found-concept-illustration-flat-design-eps10-modern-graphic-element-for-landing-page-empty-state-ui-infographic-icon-vector.jpg" />
                    <figure class="s-result-block" style="width: 100%;">
                        <h1 class="lg:text-2xl text-center"><?php _e('<strong>' . 'Sorry, but nothing matched your search terms. Please try again with some different keywords.' . '</strong>', 'Bouwercorp'); ?><span class="lnr lnr-warning"></span></h1>
                    </figure>
                </div>
            <?php endif; ?>
        </div>
    </main>
</main>

<?php get_footer();
