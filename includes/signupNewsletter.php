<main class="bg-[#fdb515] flex flex-col lg:flex-row items-center w-full h-auto relative">
    <div class="bg-[#fdb515] relative h-full w-full lg:w-[60%] p-5 lg:py-5" style="opacity: 1;">
        <div class="w-full lg:w-[60%] m-auto">
            <h1 class="text-white font-bold pb-5">SIGN UP FOR OUR NEWSLETTER</h1>
            <form class="flex flex-col gap-4 form">
                <input class="w-full py-2 px-5 rounded-full" type="text" name="name_surname" placeholder="Name &amp; Surname">
                <input class="w-full p-2 px-5 rounded-full" type="email" name="email" placeholder="email">
                <div class="flex gap-5">
                    <span class="material-symbols-outlined text-[#08784a] cursor-pointer newsletter-check select-none">
                        radio_button_unchecked
                    </span>
                    <p class="text-white"> By clicking below to subscribe, you're agreeing to receive updates and information on the Noloyiso Bonga Foundation via email.</p>
                </div>
                <button data="newslletter" class='submit py-2 px-5 w-fit m-auto cursor-pointer bg-[#08784a] hover:bg-[#fdb515] drop-shadow-lg rounded-full text-white' type='submit'>Submit</button>
            </form>
        </div>
        <div class="absolute w-full h-full top-0 left-0 form-notification hidden transition-all backdrop-blur-lg">
            <div class="flex items-center h-full">
                <div class="w-fit h-fit m-auto relative z-10 flex-col gap-5 form-progress">
                    <span class="text-center font-bold text-[#08784a]">Loading...</span>
                    <progress class="pure-material-progress-linear text-[#08784a]"></progress>
                </div>

                <!-- message -->
                <div class="w-fit h-fit m-auto relative z-10 flex-col form-message hidden">
                    <span class="material-symbols-outlined w-fit m-auto text-[#08784a]">
                        done_outline
                    </span>
                    <span class="text-center font-bold text-[#08784a]"></span>
                </div>
                <!-- message -->

                <!-- message error -->
                <div class="w-fit h-fit m-auto relative z-10 flex-col form-message-error hidden">
                    <span class="material-symbols-outlined w-fit m-auto text-red-700">
                        error
                    </span>
                    <span class="text-center font-bold text-[#08784a]"></span>
                </div>
                <!-- message error -->
            </div>

        </div>
    </div>


    <?php include get_theme_file_path("./includes/npoInfo.php") ?>
</main>