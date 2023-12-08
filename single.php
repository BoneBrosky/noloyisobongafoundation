<?php

get_header(); ?>

<main style="opacity: 1;">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <main class="flex flex-col relative h-[200px] lg:h-[300px] border-b-4 border-[#fdb515] overflow-hidden" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: center center;">
                <div class="bg-[#08784a] py-auto lg:px-[30px] bg-opacity-25 lg:bg-opacity-50 h-full m-auto w-full m-0 absolute right-0 flex items-center">
                    <div class="w-full text-right  p-5 lg:pl-0 lg:pr-10">
                        <h1 class="text-white text-center  font-bold  lg:text-4xl"><?php the_title(); ?></h1>
                        <i class="text-white text-center hidden lg:block"><?php include get_theme_file_path("./includes/singleBanner.php") ?></i>
                        <div class="donate-container hidden lg:block mt-4 w-max m-auto gap-5 transition-none text-center">

                            <?php

                            $args2 = array(
                                'theme_location' => 'secondary'
                            );

                            ?>

                            <?php wp_nav_menu($args2); ?>
                        </div>
                    </div>
                </div>
            </main>
            <main class="w-full lg:w-4/6 m-auto p-5">
                <div class="mb-5">
                    <?php the_content(); ?>
                </div>
            </main>

    <?php }
    } ?>

    <?php include get_theme_file_path("./includes/donate.php") ?>

    <?php include get_theme_file_path("./includes/signupNewsletter.php") ?>
</main>

<?php get_footer();
