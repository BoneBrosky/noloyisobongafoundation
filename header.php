<?php

get_header();

$custom_logo_id = get_theme_mod('custom_logo');
$image_url = wp_get_attachment_image_src($custom_logo_id, 'full')[0];
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_template_part('includes/head'); ?>

<body <?php body_class(); ?>>




    <div class="preloader-wrapper w-full h-full preloader-site z-[9999999] bg-[#00796B] backdrop-blur fixed top-0 bottom-0 right-0 left-0">
        <div class="preloader flex w-full h-full items-center relative">
            <div class="absolute top-0 left-0 w-full h-full opacity-20 select-none" style="background-image: url(http://localhost:10004/wp-content/themes/select-few/img/topography.svg);mix-blend-mode: soft-light;"></div>
            <div class="w-[40%] lg:w-[200px] m-auto flex flex-col gap-4">
                <a class="" href="<?php echo site_url() ?>">
                    <img class="relative drop-shadow-2xlhover:opacity-70 drop-shadow-lg z-50" src="http://localhost:10004/wp-content/uploads/2024/01/SF-Company-Profile_REVISED-3_WHITE-1.png">
                </a>
                <progress class="pure-material-progress-linear w-full !text-white"></progress>
            </div>

        </div>
    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-25 backdrop-blur-md z-[9999999] hidden modal">
        <div class="flex w-full h-full items-center relative overflow-auto">
            <div class="absolute top-0 left-0 w-full h-full opacity-10 select-none" style="background-image: url(http://localhost:10004/wp-content/themes/select-few/img/topography.svg);mix-blend-mode: soft-light;"></div>
            <div class="bg-white flex hover:bg-black lg:rounded-full group p-2 lg:p-3 fixed top-0 right-0 lg:top-[9%] lg:right-[25%] w-[auto h-[auto lg:h-auto lg:w-auto drop-shadow-2xl cursor-pointer z-[9999] modal-close">
                <span class="material-symbols-outlined text-[#00796B] group-hover:text-white">
                    close
                </span>
            </div>
            <div class="w-11/12 lg:w-2/5 m-auto flex flex-col gap-4 bg-white text-black rounded-lg drop-shadow-lg p-5 image-area relative">

            </div>

        </div>
    </div>
    <div class="bg-[#00796B] h-full lg:h-screen w-0 fixed top-0 left-0 z-50 hidden menu-modal">
        <div class="absolute top-0 left-0 w-full h-full opacity-20 select-none" style="background-image: url(http://localhost:10004/wp-content/themes/select-few/img/topography.svg);mix-blend-mode: soft-light;"></div>

        <div class="bg-white flex hover:bg-black group p-2 lg:p-4 fixed w-[40px] h-[40px] lg:h-auto lg:w-[60px] drop-shadow-2xl cursor-pointer z-[9999] open-mobile-nav">
            <span class="material-symbols-outlined text-[#00796B] group-hover:text-white w-auto m-auto">
                close
            </span>
        </div>

        <nav class="w-full h-full flex flex-col items-center z-10 relative nav-menu">
            <?php
            $args2 = array(
                'theme_location' => 'primary'
            )
            ?>
            <?php wp_nav_menu($args2); ?>
        </nav>
    </div>

    <div class="fixed top-[2%] lg:top-[4%] left-[15%] lg:left-[10%] z-50 brand-container">
        <a class="" href="<?php echo site_url() ?>">
            <img class="w-[40%] lg:w-[200px] h-auto relative drop-shadow-2xlhover:opacity-70 drop-shadow-lg z-50 brand" src="<?php echo esc_url($image_url) ?>">
        </a>

        <div class="fixed w-full lg:w-fit m-auto p-5 lg:py-0 top-0 lg:top-[5%] right-0 z-40 flex gap-2 lg:gap-5 backdrop-blur-0 lg:drop-shadow-none search-container drop-shadow-1xl">
            <div class="flex m-auto">
                <div class="search-input m-auto hidden [&_.search-form]:flex [&_.search-form]:gap-1 [&_.search-form]:lg:gap-3 [&_.search-field]:px-2 [&_.search-field]:lg:px-3 [&_.search-submit]:lg:px-3 [&_.search-submit]:lg:hover:px-4">
                    <?php get_search_form(); ?>
                </div>
            </div>

            <div class="relative">
                <div class="bg-[#00796B] bg-opacity-60 select-none text-white p-2 rounded-full cursor-pointer drop-shadow-2xl flex toggle-search">
                    <span class="material-symbols-outlined search-icon-open">
                        search
                    </span>

                    <span class="material-symbols-outlined search-icon-close hidden">
                        close
                    </span>
                </div>

            </div>
        </div>
    </div>

    <div class="z-0 px-20 overflow-x-auto px-5 text-red-600 py-10 hidden px-10 px-5 !px-5 w-[70%] w-1/2 lg:w-1/2 !py-10 w-[90%] backdrop-blur-sm backdrop-blur-lg bg-opacity-10 bg-opacity-30 bg-transparent lg:!w-[70%] backdrop-blur-2xl opacity-0"></div>