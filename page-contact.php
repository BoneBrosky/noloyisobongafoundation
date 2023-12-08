<?php

/*
Template Name: Page Single Contact
*/

get_header();

?>

<main style="opacity: 1;">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <main class="flex flex-col relative h-[200px] lg:h-[300px] border-b-4 border-[#fdb515] overflow-hidden" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: center center;">
                <div class="bg-[#08784a] py-auto lg:px-[30px] bg-opacity-25 lg:bg-opacity-50 h-full m-auto w-full lg:m-0 absolute right-0 flex items-center">
                    <div class="w-full text-right p-5 lg:pl-0 lg:pr-10">
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
            <div class="w-full lg:w-[60%] m-auto my-10">
                <div class="flex flex-col-reverse lg:flex-row items-center lg:gap-16">
                    <div class="p-5 lg:w-[60%]">
                        <main style="opacity: 1;">
                            <div class="w-auto bg-white p-5 rounded-3xl drop-shadow-2xl m-auto ml-0 relative">
                                <h1 class="font-bold pb-5 text-[#08784a] text-center">SIGN UP FOR OUR NEWSLETTER</h1>
                                <form class="flex flex-col gap-4 lg:px-5 form">
                                    <input class="w-full border-2 border-[#08784a] text-[#08784a] py-2 px-5 rounded-full" type="text" name="name_surname" placeholder="Name &amp; Surname">
                                    <input class="w-full border-2 border-[#08784a] text-[#08784a] p-2 px-5 rounded-full" type="email" name="email" placeholder="email">
                                    <input class="w-full border-2 border-[#08784a] text-[#08784a] p-2 px-5 rounded-full" type="text" name="subject" placeholder="subject">
                                    <textarea class="w-full border-2 border-[#08784a] text-[#08784a] p-2 px-5 rounded-3xl" type="text-area" name="message" placeholder="message" rows="4" cols="50"></textarea>
                                    <button class="submit py-2 px-5 w-fit m-auto cursor-pointer hover:bg-[#f7b115] bg-[#08784a] drop-shadow-lg rounded-full text-white">submit</button>
                                </form>
                                <div class="absolute w-full h-full top-0 left-0 form-notification hidden transition-all backdrop-blur-lg">
                                    <div class="flex items-center h-full">
                                        <div class="w-fit h-fit m-auto relative z-10 flex-col gap-5 form-progress">
                                            <span class="text-center font-bold text-[#08784a]">Loading...</span>
                                            <progress class="pure-material-progress-linear text-[#08784a]"></progress>
                                        </div>

                                        <!-- message -->
                                        <div class="w-fit h-fit m-auto relative z-10 flex-col form-message hidden">
                                            <span class="material-symbols-outlined w-fit m-auto text-[#08784a]">
                                                done_outline
                                            </span>
                                            <span class="text-center font-bold text-[#08784a]"></span>
                                        </div>
                                        <!-- message -->

                                        <!-- message error -->
                                        <div class="w-fit h-fit m-auto relative z-10 flex-col form-message-error hidden">
                                            <span class="material-symbols-outlined w-fit m-auto text-red-700">
                                                error
                                            </span>
                                            <span class="text-center font-bold text-[#08784a]"></span>
                                        </div>
                                        <!-- message error -->
                                    </div>

                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="p-5 lg:w-[40%] lg:p-0 gap-5 rounded-3xl drop-shadow-2xl">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
    <?php }
    } ?>

</main>

<?php get_footer();
