<?php

/*
Template Name: Page Single Donor
*/

get_header(); ?>

<main style="opacity: 1;">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <main class="flex flex-col relative h-[200px] lg:h-[300px] border-b-4 border-[#fdb515] overflow-hidden" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: center center;">
                <div class="bg-[#08784a] py-auto lg:px-[30px] bg-opacity-25 lg:bg-opacity-50 h-full m-auto w-full m-0 absolute right-0 flex items-center">
                    <div class="w-full text-right  p-5 lg:pl-0 lg:pr-10">
                        <h1 class="text-white text-center  font-bold text-4xl"><?php the_title(); ?></h1>
                        <i class="text-white text-center hidden lg:block"><?php include get_theme_file_path("./includes/singleBanner.php") ?></i>
                        <div class="donate-container mt-4 w-max m-auto gap-5 transition-none text-center hidden lg:block">

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
    <main class="w-full lg:w-4/6 m-auto p-5">
        <form class="w-full lg:w-[50%] m-auto mb-5 p-5 bg-white rounded-3xl drop-shadow-2xl" style="opacity: 1;"><label class="text-center block pb-5 font-bold text-[#08784a]">Signup for our news letter</label>
            <div class="flex gap-5"><input class="w-full p-2 px-5 rounded-full border-2 border-[#08784a]" type="email" name="email" placeholder="your@email.com"><button class="py-2 px-5 cursor-pointer hover:bg-[#08784a] bg-[#fdb515] drop-shadow-2xls rounded-full text-white">submit</button></div>
        </form>
    </main>

</main>

<?php get_footer();
