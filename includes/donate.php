<?php
$args = array(
    'post_type' => 'donation'
);

$posts = new WP_Query($args);

wp_reset_query();

$imageID = get_post_meta($posts->posts[0]->ID, 'image', true);
$button1Toggle = get_post_meta($posts->posts[0]->ID, 'danation_buttons_Toggle_button', true);
$button2Toggle = get_post_meta($posts->posts[0]->ID, 'danation_buttons_Toggle_button2', true);
$button1Text = get_post_meta($posts->posts[0]->ID, 'danation_buttons_button_text', true);
$button2Text = get_post_meta($posts->posts[0]->ID, 'danation_buttons_button_text2', true);

$button1Link = get_post_meta($posts->posts[0]->ID, 'danation_buttons_button_1_link', true);
$button2Link = get_post_meta($posts->posts[0]->ID, 'danation_buttons_button_2_link', true);

$custom_image = wp_get_attachment_url($imageID);
// echo site_url() . '/' . $button1Link . site_url() . '/' . $button2Link
?>

<?php
// echo json_encode($posts);
if ($posts->have_posts()) :
    while ($posts->have_posts()) : $posts->the_post();
?>
        <main class="bg-[#08784a] flex flex-col lg:flex-row items-center gap-5 w-full h-auto relative">
            <div class="p-5 w-full">
                <div class="flex flex-col lg:flex-row items-center gap-5 w-full lg:w-[60%] m-auto mr-0">
                    <img class="w-auto h-auto object-contain drop-shadow-2xl" src="<?php echo esc_url(get_the_post_thumbnail_url($posts->ID, 'full')) ?>">
                    <div class="font-bold text-white text-center">
                        <div class="uppercase text-xl py-4">
                            <p><?php echo the_content() ?></p>
                        </div>
                        <div class="flex justify-center gap-4">
                            <?php
                            if ($button1Toggle == "1") {
                            ?>
                                <a class="bg-[#fdb515] hover:bg-[#08784a] py-2 px-8 rounded-full drop-shadow-2xl" href="<?php echo get_site_url() . '/' . strtolower($button1Link) ?>">
                                    <button><?php echo $button1Text ?></button>
                                </a>
                            <?php
                            }

                            if ($button2Toggle == "1") {
                            ?>
                                <a class="bg-[#fdb515] hover:bg-[#08784a] py-2 px-8 rounded-full drop-shadow-2xl" href="<?php echo get_site_url() . '/' . strtolower($button2Link) ?>">
                                    <button><?php echo $button2Text ?></button>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div><img class="w-full lg:w-[40%]" src="<?php echo esc_url($custom_image); ?>">
        </main>
<?php
    endwhile;
else :
    _e('Sorry, no posts were found.', 'textdomain');
endif;

?>