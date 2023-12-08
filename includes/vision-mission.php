<?php
global $post;
$current_page_slug = $post->post_name;
// echo $current_page_slug . " - " . strtolower(getLinkedPages($NestedPageObjects)["title"]) . " - " . json_encode($post)
$args = array(
    'pagename' => 'about-us'
);

$posts = new WP_Query($args);

wp_reset_query();
$NestedPageObjects = get_post_meta($posts->posts[0]->ID, 'post_additional_info', true);

function getLinkedPages($NestedPageObjects)
{

    $argsLinkedPages = array(
        'page_id' => $NestedPageObjects[0]
    );

    $linkedPosts = new WP_Query($argsLinkedPages);

    $argsLinkedPages2 = array(
        'page_id' => $NestedPageObjects[1]
    );

    $linkedPosts2 = new WP_Query($argsLinkedPages2);

    $argsLinkedPages3 = array(
        'page_id' => $NestedPageObjects[2]
    );

    $linkedPosts3 = new WP_Query($argsLinkedPages3);

    wp_reset_query();
    return array(
        "title" => $linkedPosts->posts[0]->post_title,
        "guid" => $linkedPosts->posts[0]->guid,
        "title2" => $linkedPosts2->posts[0]->post_title,
        "guid2" => $linkedPosts2->posts[0]->guid,
        "title3" => $linkedPosts3->posts[0]->post_title,
        "guid3" => $linkedPosts3->posts[0]->guid
    );
}

function activeStyle($current_page_slug, $NestedPageObjects)
{
    $card1ContainerStyles = '1 p-6 group drop-shadow-2xl text-center flex-1 h-fit bg-[#08784a] hover:bg-[#fdb515] text-white rounded-3xl hover:drop-shadow-2xl';

    if ($current_page_slug != strtolower(getLinkedPages($NestedPageObjects)["title"])) {
        return $card1ContainerStyles;
    }
}

function activeStyle2($current_page_slug, $NestedPageObjects)
{

    $card2ContainerStyles = '2 p-6 group drop-shadow-2xl text-center flex-1 h-fit text-white bg-[#fdb515] hover:bg-[#08784a] rounded-3xl hover:drop-shadow-2xl';

    if ($current_page_slug != strtolower(getLinkedPages($NestedPageObjects)["title2"])) {
        return $card2ContainerStyles;
    }
}

function activeStyle3($current_page_slug, $NestedPageObjects)
{

    $card3ContainerStyles = '3 p-6 group drop-shadow-2xl text-center flex-1 h-fit bg-[#08784a] hover:bg-[#fdb515] text-white rounded-3xl hover:drop-shadow-2xl';

    if ($current_page_slug != strtolower(getLinkedPages($NestedPageObjects)["title3"])) {
        return $card3ContainerStyles;
    }
}

// echo json_encode(getLinkedPages($NestedPageObjects)["guid"]);
// echo json_encode($posts);

?>

<main class="w-full lg:w-[80%] m-auto mb-12 lg:my-8 lg:mt-0 p-5">
    <div class="flex flex-col lg:flex-row w-full gap-8 justify-between">
        <?php
        if ($posts->have_posts()) :
            while ($posts->have_posts()) : $posts->the_post();
                // echo json_encode(get_post_field('post_name'))
        ?>
                <?php if ($current_page_slug != strtolower(getLinkedPages($NestedPageObjects)["title"]) | $current_page_slug == "home") {
                ?>
                    <div class="<?php echo activeStyle($current_page_slug, $NestedPageObjects); ?>">
                        <span class="group-hover:fill-[#08784a] fill-[#fdb515] w-[35px] h-[35px] block m-auto">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge css-6flbmm" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VisibilityIcon">
                                <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"></path>
                            </svg>
                        </span>
                        <h1 class="text-[#fdb515] group-hover:text-[#08784a] font-bold py-5 text-xl uppercase"><?php echo getLinkedPages($NestedPageObjects)["title"] ?></h1>
                        <a href="<?php echo get_site_url() . '/' . strtolower(getLinkedPages($NestedPageObjects)["title"]) ?>">
                            <button class="bg-[#fdb515] group-hover:bg-[#08784a] text-[#08784a] group-hover:text-[#fdb515]  m-2 mt-6 mx-auto flex gap-2 items-center w-auto drop-shadow-2xl py-2 px-16 rounded-full">Read more
                                <span class="group-hover:fill-[#fdb515] fill-[#08784a] w-6 h-6 block m-auto">
                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ReadMoreIcon">
                                        <path d="M13 7h9v2h-9zm0 8h9v2h-9zm3-4h6v2h-6zm-3 1L8 7v4H2v2h6v4z"></path>
                                    </svg>
                                </span>
                            </button>
                        </a>
                    </div>
                <?php
                }
                ?>
                <?php if ($current_page_slug != strtolower(getLinkedPages($NestedPageObjects)["title2"]) | $current_page_slug == "home") {
                ?>
                    <div class="<?php echo activeStyle2($current_page_slug, $NestedPageObjects); ?>">
                        <span class="group-hover:fill-[#fdb515] fill-[#08784a] w-[35px] h-[35px] block m-auto">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge css-6flbmm" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="HubIcon">
                                <path d="M8.4 18.2c.38.5.6 1.12.6 1.8 0 1.66-1.34 3-3 3s-3-1.34-3-3 1.34-3 3-3c.44 0 .85.09 1.23.26l1.41-1.77c-.92-1.03-1.29-2.39-1.09-3.69l-2.03-.68c-.54.83-1.46 1.38-2.52 1.38-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3c0 .07 0 .14-.01.21l2.03.68c.64-1.21 1.82-2.09 3.22-2.32V5.91C9.96 5.57 9 4.4 9 3c0-1.66 1.34-3 3-3s3 1.34 3 3c0 1.4-.96 2.57-2.25 2.91v2.16c1.4.23 2.58 1.11 3.22 2.32L18 9.71V9.5c0-1.66 1.34-3 3-3s3 1.34 3 3-1.34 3-3 3c-1.06 0-1.98-.55-2.52-1.37l-2.03.68c.2 1.29-.16 2.65-1.09 3.69l1.41 1.77c.38-.18.79-.27 1.23-.27 1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3c0-.68.22-1.3.6-1.8l-1.41-1.77c-1.35.75-3.01.76-4.37 0L8.4 18.2z"></path>
                            </svg>
                        </span>
                        <h1 class="text-[#08784a] group-hover:text-[#fdb515] font-bold py-5 text-xl uppercase"><?php echo getLinkedPages($NestedPageObjects)["title2"] ?></h1>
                        <a href="<?php echo get_site_url() . '/' . strtolower(getLinkedPages($NestedPageObjects)["title2"]) ?>">
                            <button class="bg-[#08784a] group-hover:bg-[#fdb515] text-[#fdb515] group-hover:text-[#08784a] m-2 mt-6 mx-auto flex gap-2 items-center w-auto drop-shadow-2xl py-2 px-16 rounded-full">Read more
                                <span class="group-hover:fill-[#08784a] fill-[#fdb515] w-6 h-6 block m-auto">
                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ReadMoreIcon">
                                        <path d="M13 7h9v2h-9zm0 8h9v2h-9zm3-4h6v2h-6zm-3 1L8 7v4H2v2h6v4z"></path>
                                    </svg>
                                </span>
                            </button>
                        </a>
                    </div>
                <?php
                }
                ?>
                <?php if ($current_page_slug != strtolower(getLinkedPages($NestedPageObjects)["title3"]) | $current_page_slug == "home") {
                ?>
                    <div class="<?php echo activeStyle3($current_page_slug, $NestedPageObjects); ?>">
                        <span class="group-hover:fill-[#08784a] fill-[#fdb515] w-[35px] h-[35px] block m-auto">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge css-6flbmm" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="FavoriteBorderIcon">
                                <path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"></path>
                            </svg>
                        </span>
                        <h1 class="text-[#fdb515] group-hover:text-[#08784a] font-bold py-5 text-xl uppercase"><?php echo getLinkedPages($NestedPageObjects)["title3"] ?></h1>
                        <a href="<?php echo get_site_url() . '/' . strtolower(getLinkedPages($NestedPageObjects)["title3"]) ?>">
                            <button class="bg-[#fdb515] group-hover:bg-[#08784a] text-[#08784a] group-hover:text-[#fdb515] m-2 mt-6 mx-auto flex gap-2 items-center w-auto drop-shadow-2xl py-2 px-16 rounded-full">Read more
                                <span class="group-hover:fill-[#fdb515] fill-[#08784a] w-6 h-6 block m-auto">
                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ReadMoreIcon">
                                        <path d="M13 7h9v2h-9zm0 8h9v2h-9zm3-4h6v2h-6zm-3 1L8 7v4H2v2h6v4z"></path>
                                    </svg>
                                </span>
                            </button>
                        </a>
                    </div>
                <?php
                }
                ?>
        <?php
            endwhile;
        else :
            _e('Sorry, no posts were found.', 'textdomain');
        endif;

        ?>
    </div>
</main>