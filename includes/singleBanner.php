<?php

global $post;

$sub_heading = get_post_meta($post->ID, 'sub_heading', true);
// $postHeading = get_post_meta($post->ID);

// echo json_encode($postHeading);

echo $sub_heading;
