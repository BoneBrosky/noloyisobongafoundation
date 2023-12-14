<?php
global $post;
$current_page_slug = $post->post_name;
// echo $current_page_slug . " - " . strtolower(getLinkedPages($NestedPageObjects)["title"]) . " - " . json_encode($post)
$args = array(
    'pagename' => 'get-involved'
);

$posts = new WP_Query($args);

wp_reset_query();
$NestedPageObjects = get_post_meta($posts->posts[0]->ID, 'additional_info', true);

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

    wp_reset_query();
    return array(
        "title" => $linkedPosts->posts[0]->post_title,
        "guid" => $linkedPosts->posts[0]->guid,
        "title2" => $linkedPosts2->posts[0]->post_title,
        "guid2" => $linkedPosts2->posts[0]->guid
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
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge css-6flbmm" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VolunteerActivismIcon">
                                <path d="M1 11h4v11H1zm15-7.75C16.65 2.49 17.66 2 18.7 2 20.55 2 22 3.45 22 5.3c0 2.27-2.91 4.9-6 7.7-3.09-2.81-6-5.44-6-7.7C10 3.45 11.45 2 13.3 2c1.04 0 2.05.49 2.7 1.25zM20 17h-7l-2.09-.73.33-.94L13 16h2.82c.65 0 1.18-.53 1.18-1.18 0-.49-.31-.93-.77-1.11L8.97 11H7v9.02L14 22l8.01-3c-.01-1.1-.9-2-2.01-2z"></path>
                            </svg>
                        </span>
                        <h1 class="text-[#fdb515] group-hover:text-[#08784a] font-bold py-5 text-xl uppercase"><?php echo getLinkedPages($NestedPageObjects)["title"] ?></h1>
                        <a href="<?php echo site_url(strtolower(getLinkedPages($NestedPageObjects)["title"])) ?>">
                            <button class="bg-[#fdb515] group-hover:bg-[#08784a] text-[#08784a] group-hover:text-[#fdb515]  m-2 mt-6 mx-auto flex gap-2 items-center w-auto drop-shadow-2xl py-2 px-16 rounded-full">Read more
                                <span class="fill-[#08784a] group-hover:fill-[#fdb515] w-6 h-6 block m-auto">
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
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge css-6flbmm" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ManageHistoryIcon">
                                <path d="m22.69 18.37 1.14-1-1-1.73-1.45.49c-.32-.27-.68-.48-1.08-.63L20 14h-2l-.3 1.49c-.4.15-.76.36-1.08.63l-1.45-.49-1 1.73 1.14 1c-.08.5-.08.76 0 1.26l-1.14 1 1 1.73 1.45-.49c.32.27.68.48 1.08.63L18 24h2l.3-1.49c.4-.15.76-.36 1.08-.63l1.45.49 1-1.73-1.14-1c.08-.51.08-.77 0-1.27zM19 21c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zM11 7v5.41l2.36 2.36 1.04-1.79-1.4-1.39V7h-2zm10 5c0-4.97-4.03-9-9-9-2.83 0-5.35 1.32-7 3.36V4H3v6h6V8H6.26C7.53 6.19 9.63 5 12 5c3.86 0 7 3.14 7 7h2zm-10.14 6.91c-2.99-.49-5.35-2.9-5.78-5.91H3.06c.5 4.5 4.31 8 8.94 8h.07l-1.21-2.09z"></path>
                            </svg>
                        </span>
                        <h1 class="text-[#08784a] group-hover:text-[#fdb515] font-bold py-5 text-xl uppercase"><?php echo getLinkedPages($NestedPageObjects)["title2"] ?></h1>
                        <a href="<?php echo site_url(strtolower(getLinkedPages($NestedPageObjects)["title2"])) ?>">
                            <button class="bg-[#08784a] group-hover:bg-[#fdb515] text-[#fdb515] fill-[#fdb515] group-hover:fill-[#08784a]  m-2 mt-6 mx-auto flex gap-2 items-center w-auto drop-shadow-2xl py-2 px-16 rounded-full">Read more
                                <span class="w-6 h-6 block m-auto">
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