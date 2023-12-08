<?php
global $post;
$current_page_slug = $post->post_name;

$args = array(
    'pagename' => 'about-us'
);

$posts = new WP_Query($args);

wp_reset_query();
$founder_info = get_post_meta($posts->posts[0]->ID, 'founder_info', true);
$founder_info_image = get_post_meta($posts->posts[0]->ID, 'founder_info_image', true);

$custom_image = wp_get_attachment_url($founder_info_image);
// echo json_encode($custom_image)
?>

<main class="p-5 relative" style="background-image: url(<?php echo esc_url($custom_image); ?>); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="mb-5 lg:w-4/6 w-full m-auto relative z-[1] text-white text-justify">
        <?php echo $founder_info ?>
    </div>
    <div class="bg-[#08784a] px-[320px] bg-opacity-70 h-full w-full m-0 p-0 absolute z-0 right-0 top-0 flex items-center"></div>
</main>