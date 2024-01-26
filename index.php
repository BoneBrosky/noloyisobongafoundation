<?php

global $post;

get_header();
$args = array(
  'pagename' => 'home',
  'per_page' => -1
);

$posts = new WP_Query($args);

wp_reset_query();
get_header();

?>
<main>
  <div class="relative h-[217px] lg:h-[566px] overflow-hidden">
    <?php
    if ($posts->have_posts()) :
      while ($posts->have_posts()) : $posts->the_post();
    ?>
        <div class="h-screen w-full absolute top-0 left-0 z-0">
          <!-- <img class="w-full h-full" src="<?php the_post_thumbnail_url() ?>" /> -->
          <video width="100%" height="100%" autoplay loop muted>
            <source src="http://localhost:10004/wp-content/uploads/2024/01/Select-Few-Logo-Anime.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
    <?php
      endwhile;
      navSide();
    endif; ?>
  </div>
  <?php get_template_part('./includes/what-we-do') ?>
  <?php get_template_part('./includes/projects') ?>
  <?php get_template_part('./includes/clients') ?>
  <?php get_template_part('./includes/contact') ?>
</main>

<?php get_footer();
