<?php

get_header(); ?>

<script>
  const [first, setfirst] = useState("second")
  console.log("Hello from first Default:", first)
  setfirst("first")
  console.log("Hello from first Result:", first)
</script>


<main style="opacity: 1;">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      // echo json_encode(get_post_field('post_name'))
  ?>

      <main class="flex flex-col relative h-[350px] lg:h-[425px] border-b-4 border-[#fdb515] overflow-hidden" style="background-image: url(<?php echo esc_url(get_header_image()); ?>); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="bg-[#08784a] py-auto lg:px-[30px] bg-opacity-25 lg:bg-opacity-50 h-full m-auto w-full lg:w-[30%] lg:pl-2 lg:pr-10 absolute right-0 flex items-center">
          <div class="w-full text-right p-5 lg:pl-0 lg:pr-10">
            <h1 class="text-white font-bold lg:text-2xl">SPORT HAS THE POWER TO INSPIRE. IT HAS THE POWER TO UNITE PEOPLE IN A WAY THAT LITTLE ELSE DOES. IT SPEAKS TO YOUTH IN A LANGUAGE THEY UNDERSTAND.</h1>
            <i class="text-white text-xs lg:text-base">~ Nelson Mandela</i>
          </div>
        </div>
      </main>

      <main class="w-full lg:w-4/6 sm:w-full m-auto p-5">
        <div class="lg:mb-5">
          <?php the_content(); ?>
        </div>
      </main>
  <?php
    endwhile;
  endif; ?>

  <?php include get_theme_file_path("./includes/vision-mission.php") ?>

  <?php include get_theme_file_path("./includes/donate.php") ?>

  <?php include get_theme_file_path("./includes/quickBlog.php") ?>

  <?php include get_theme_file_path("./includes/signupNewsletter.php") ?>
</main>

<?php get_footer();
