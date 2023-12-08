<?php
$args = array(
  'post_type' => 'footer'
);

$posts = new WP_Query($args);

wp_reset_query();
?>

<?php

if ($posts->have_posts()) :
  while ($posts->have_posts()) : $posts->the_post();
?>
    <footer class="bg-[#08784a] h-auto relative">
      <div class=" flex flex-col lg:flex-row items-center lg:gap-5 w-full">
        <div class="p-4 w-full">
          <p class="text-white font-bold text-center"><?php the_content() ?></p>
        </div><img class="w-full lg:w-[20%]" src="<?php echo esc_url(get_the_post_thumbnail_url($posts->ID, 'full')) ?>">
      </div>
    </footer>
<?php
  endwhile;
else :
  _e('Sorry, no posts were found.', 'textdomain');
endif;

?>

<?php wp_footer(); ?>
</body>

</html>