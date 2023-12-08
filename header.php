<?php session_start(); // place it on the top of the script 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php
$custom_logo_id = get_theme_mod('custom_logo');
$image_url = wp_get_attachment_image_src($custom_logo_id, 'full')[0];
?>
<?php get_template_part('includes/head'); ?>

<body <?php body_class(); ?>>
  <div class="preloader-wrapper">
    <div class="preloader flex flex-col gap-5">
      <img src="<?php echo get_theme_file_uri() ?>/assets/brand.png">
      <progress class="pure-material-progress-linear  text-[#08784a] w-full"></progress>
    </div>
  </div>
  <header class="lg:flex contents flex-col sticky top-0 z-10 lg:w-full border-b-4 border-[#fdb515]">
    <div class="bg-[#08784a] text-center text-white h-auto w-full p-3 static z-10">
      <div class="flex w-content text-xs lg:text-base lg:w-3/5 justify-between font-bold gap-5 items-center ml-0 lg:m-auto">
        <h4 class="flex gap-1 items-center">
          <span class="fill-white w-5 h-5 block m-auto">
            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-1k33q06" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="EmailIcon">
              <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"></path>
            </svg>
          </span>

          <span class=""><a href="mailto:info@noloyisobongafoundation.org">
              <div>
                <p class="flex gap-1 items-center"><a href="mailto:info@noloyisobongafoundation.org">info@noloyisobongafoundation.org</a></p>
              </div>
            </a></span>
        </h4>
        <h4 class="flex gap-1 items-center">
          <span class="fill-white w-5 h-5 m-auto hidden lg:block">
            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-1k33q06" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="CallIcon">
              <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"></path>
            </svg>
          </span>
          <span class="hidden lg:block">
            <div>
              <p class="flex gap-1 items-center">073 906 0622</p>
            </div>
          </span>
        </h4>
      </div>
    </div>
    <div class="flex transition-transform bg-white px-5 py-2 lg:p-5 lg:justify-between w-full m-0 drop-shadow-xl static z-10">
      <div class="flex flex-col lg:flex-row gap-5 lg:gap-14 justify-between items-center sticky w-full lg:w-[89%] m-auto">
        <div class="flex w-full lg:w-auto items-center justify-between gap-5"><a href="<?php echo site_url() ?>">
            <img class="w-[125px] h-auto" src="<?php echo esc_url($image_url) ?>"></a>
          <div class="flex gap-2">

            <!-- Mobile Nav -->
            <span class="open-mobile-nav mb-nav group bg-[#08784a] w-10 h-10 lg:hidden cursor-pointer drop-shadow-lg hover:bg-white p-2 rounded-full text-white hover:text-[#fdb515]">
              <span class="menu-icon-open fill-white group-hover:fill-[#fdb515] w-10 h-10 m-auto">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="MenuIcon">
                  <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                </svg>
              </span>

              <span class="menu-icon-close hidden fill-[#fdb515] w-10 h-10 m-auto">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="CloseIcon">
                  <path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                </svg>
              </span>
            </span>
            <!-- End Mobile Nav -->

            <!-- Search Mobile -->
            <span class="toggle-search2 mb-nav group bg-[#fdb515] w-10 h-10 lg:hidden cursor-pointer drop-shadow-lg hover:bg-white p-2 rounded-full text-white hover:text-[#fdb515]">
              <span class="fill-white group-hover:fill-[#fdb515] w-10 h-10 m-auto">
                <svg class="search-icon-open MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="SearchIcon">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </span>

              <span class="fill-[#fdb515] w-10 h-10 m-auto">
                <svg class="search-icon-close hidden MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="CloseIcon">
                  <path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                </svg>
              </span>
            </span>
            <!-- End Search Mobile -->
          </div>
        </div>
        <div class="mobile-nav lg:flex flex-col lg:flex-row hidden transition-transform items-center gap-2 w-full lg:w-11/12 justify-between">
          <div class="main-nav">
            <?php
            $args = array(
              'theme_location' => 'primary'
            );
            ?>
            <?php wp_nav_menu($args); ?>
          </div>

          <div class="donate-container">
            <?php
            $args2 = array(
              'theme_location' => 'secondary'
            )
            ?>
            <?php wp_nav_menu($args2); ?>
          </div>

          <div class="hidden search-input">
            <?php get_search_form(); ?>
          </div>

          <span class="toggle-search group hidden bg-[#fdb515] w-10 h-10 lg:block cursor-pointer drop-shadow-lg hover:bg-white p-2 rounded-full text-white hover:text-[#fdb515]">
            <span class="fill-white group-hover:fill-[#fdb515] w-10 h-10 m-auto">
              <svg class="search-icon-open MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="SearchIcon">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </span>

            <span class="fill-[#fdb515] w-10 h-10 m-auto">
              <svg class="search-icon-close hidden MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="CloseIcon">
                <path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
              </svg>
            </span>
          </span>
        </div>
      </div>
    </div>
  </header>


  <div class="fixed hidden lg:block right-0 top-1/2 -translate-y-1/2 z-50 bg-[#18b83d] bg-opacity-50 p-2 w-auto drop-shadow-xl">
    <ul class="flex flex-col gap-4">
      <li class="cursor-pointer fill-white hover:fill-[#fdb515] transition-none w-6 h-6">
        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="TwitterIcon">
          <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path>
        </svg>
      </li>
      <li class="cursor-pointer fill-white hover:fill-[#fdb515] transition-none w-6 h-6">
        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="FacebookIcon">
          <path d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z"></path>
        </svg>
      </li>
      <li class="cursor-pointer fill-white hover:fill-[#fdb515] transition-none w-6 h-6">
        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="InstagramIcon">
          <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path>
        </svg>
      </li>
    </ul>
  </div>