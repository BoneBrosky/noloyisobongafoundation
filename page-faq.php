<?php

/*
Template Name: Page Single Faq
*/

get_header();

global $post;
$current_page = $post;

$args = array(
    'post_type' => 'faqs',
    'per_page' => 10
);

$posts = new WP_Query($args);

wp_reset_query();

$custom_image = wp_get_attachment_url($current_page->ID);


?>

<main style="opacity: 1;">

    <main class="flex flex-col relative h-[200px] lg:h-[300px] border-b-4 border-[#fdb515] overflow-hidden" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($posts->ID, 'full')); ?>); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: center center;">
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
            <?php
            if ($posts->have_posts()) :
                while ($posts->have_posts()) : $posts->the_post();
                    // echo json_encode(get_post_field('post_name'))
            ?>
                    <div class="MuiPaper-root drop-shadow first-of-type:rounded-t-md last-of-type:rounded-b-md MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiAccordion-root MuiAccordion-rounded MuiAccordion-gutters css-67l5gl">
                        <div id="<?php the_title() ?>" class="trigger font-bold flex justify-between p-5 MuiButtonBase-root MuiAccordionSummary-root MuiAccordionSummary-gutters css-1iji0d4" tabindex="0" role="button" aria-expanded="false" aria-controls="panel1a-content" id="panel1a-header">
                            <div class="MuiAccordionSummary-content MuiAccordionSummary-contentGutters css-17o5nyn">
                                <?php the_title() ?>
                            </div>
                            <div class="MuiAccordionSummary-expandIconWrapper css-1fx8m19">
                                <span class="accordion-icon relative w-6 h-6 block m-auto">
                                    <div class="pointer-events-none w-full h-full absolute t-0 l-0">
                                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ExpandMoreIcon">
                                            <path d="M16.59 8.59 12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="p-5 accordion-content hidden MuiCollapse-root MuiCollapse-vertical MuiCollapse-hidden css-a0y2e3" style="min-height: 0px;">
                            <div class="MuiCollapse-wrapper MuiCollapse-vertical css-hboir5">
                                <div class="MuiCollapse-wrapperInner MuiCollapse-vertical css-8atqhb">
                                    <div aria-labelledby="panel1a-header" id="panel1a-content" role="region" class="MuiAccordion-region">
                                        <div class="MuiAccordionDetails-root css-u7qq7e">
                                            <p class="MuiTypography-root MuiTypography-body1 css-9l3uo3">
                                                <span>
                                                    <?php the_content() ?>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php the_posts_pagination(); ?>
            <?php
                endwhile;
            else :
                _e('Sorry, no posts were found.', 'textdomain');
            endif;

            ?>
        </div>
    </main>
    <?php include get_theme_file_path("./includes/donate.php") ?>

    <?php include get_theme_file_path("./includes/signupNewsletter.php") ?>
</main>

<?php get_footer();
