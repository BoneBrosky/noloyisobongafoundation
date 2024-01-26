<?php wp_footer(); ?>
<footer class="bg-[#00796B]">
    <div class="flex lg:flex-row flex-col-reverse lg:gap-10 w-full lg:w-full lg:px-5 m-auto">
        <div class="p-5 bg-[#009688] w-full lg:w-[200px]">
            <a href="<?php echo site_url() ?>">
                <img class="lg:w-full w-[200px] m-auto" src="http://localhost:10004/wp-content/uploads/2024/01/SF-Company-Profile_REVISED-3_WHITE.png" />
            </a>
        </div>
        <div class="text-white flex flex-col-reverse lg:flex-row gap-5 lg:gap-0 lg:justify-between w-full h-full p-4 items-center lg:h-auto [&_.menu-footer-menu-container]:w-full [&_.menu-footer-menu-container]:lg:w-auto [&_.menu-item]:w-full [&_.menu-item]:lg:w-auto [&_.menu]:text-center [&_.menu]:flex-col [&_.menu]:lg:flex-row">
            <p>© <?php echo the_date('Y') ?> Select Few Pty (Ltd)</p>

            <?php
            $args2 = array(
                'theme_location' => 'secondary'
            )
            ?>
            <?php wp_nav_menu($args2); ?>

        </div>
    </div>
</footer>
</body>

</html>