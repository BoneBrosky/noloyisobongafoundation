<?php

global $post;

get_header();
$args = array(
    'post_type' => 'contact',
    'order' => 'ASC'
);

$posts = new WP_Query($args);
$mapEmbed = get_post_meta($posts->posts[0]->ID, 'map_embed', true);
$address_info_telephone = get_post_meta($posts->posts[0]->ID, 'contact_info_address_info_telephone', true);
$address = get_post_meta($posts->posts[0]->ID, 'contact_info_address', true);
$address_info_email = get_post_meta($posts->posts[0]->ID, 'contact_info_address_info_email', true);

wp_reset_query();
?>
<div class="">
    <div class="flex flex-col">
        <div class="bg-[#00796B] w-full relative">
            <div class="absolute top-0 left-0 w-full h-full opacity-10 select-none" style="background-image: url(http://localhost:10004/wp-content/themes/select-few/img/topography.svg);"></div>
            <div class="w-[70%] contact-details m-auto">
                <div class="text-center mt-4">
                    <h1 class="text-2xl font-normal text-white relative">Get in touch with us!</h1>
                </div>
                <div class="lg:flex lg:flex-row justify-between my-8 text-center relative contact-details-content flex flex-col gap-5">
                    <div class="text-white">
                        <div class="block m-auto w-min">
                            <span class="material-symbols-outlined mb-2">phone_iphone
                            </span>
                        </div>

                        <h1 class="text-lg text-white uppercase text-center font-bold">Phone</h1>
                        <?php echo $address_info_telephone; ?>
                    </div>

                    <div class="border-r-2"></div>

                    <div class="text-white">

                        <div class="block m-auto w-min">
                            <span class="material-symbols-outlined mb-2">
                                location_on
                            </span>
                        </div>
                        <h1 class="text-lg text-white uppercase text-center font-bold">Address</h1>
                        <?php echo $address; ?>
                    </div>

                    <div class="border-r-2"></div>

                    <div class="text-white">
                        <div class="block m-auto w-min">
                            <span class="material-symbols-outlined mb-2">
                                mail
                            </span>
                        </div>
                        <h1 class="text-lg text-white uppercase text-center font-bold">Email</h1>
                        <?php echo $address_info_email; ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-full relative [&_.form]:relative [&_.form]:w-full [&__iframe]:h-[400px] [&__iframe]:lg:h-[860px]">
            <div class="relative overflow-hidden w-full lg:w-[500px] bg-[#00796B] lg:bg-opacity-60 lg:backdrop-blur-sm lg:rounded-2xl lg:drop-shadow-2xl lg:absolute lg:right-[5%] lg:top-1/2 lg:-translate-y-1/2 py-4 px-5 lg:px-12 from-container">
                <!-- Loading -->
                <div class="absolute top-0 left-0 w-full h-full bg-[#00796B] z-10 bg-opacity-50 backdrop-blur-sm hidden form-progress transition-opacity">
                    <div class="flex items-center h-full">
                        <div class="w-fit h-fit m-auto relative z-10 flex flex-col gap-5">
                            <span class="text-center font-bold text-white">Loading...</span>
                            <progress class="pure-material-progress-linear !text-white"></progress>
                        </div>
                    </div>
                </div>

                <!-- Message done -->
                <div class="absolute top-0 left-0 w-full h-full bg-[#00796B] z-10 bg-opacity-50 backdrop-blur-sm hidden form-success transition-opacity">
                    <div class="flex items-center h-full">
                        <div class="w-fit h-fit m-auto relative z-10 flex flex-col gap-5 items-center">
                            <span class="material-symbols-outlined text-white">
                                done
                            </span>
                            <div class="form-message">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message error -->
                <div class="absolute top-0 left-0 w-full h-full bg-[#00796B] z-10 bg-opacity-50 backdrop-blur-sm hidden form-error transition-opacity">
                    <div class="flex items-center h-full">
                        <div class="w-fit h-fit m-auto relative z-10 flex flex-col gap-5 items-center">
                            <span class="material-symbols-outlined text-white">
                                close
                            </span>
                            <div class="form-message">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <h1 class="text-2xl font-normal text-white">Get a quote!</h1>
                </div>
                <form enctype="multipart/form-data" class="flex flex-col mt-5 gap-5 form">
                    <div class="flex flex-col gap-2">
                        <label class="text-white" for="firstname-lastname">Firstame & Lastname</label>
                        <input class="border-none rounded-full py-2 px-4 w-full text-[#00796B]" placeholder="Firstname & Lastname" type="text" name="firstname-lastname" />
                    </div>
                    <div class="lg:flex flex-col lg:flex-row gap-5 lg:gap-2">
                        <div class="flex flex-col gap-2">
                            <label class="text-white" for="phone-number">Phone Number</label>
                            <input class="border-none rounded-full py-2 px-4 w-full text-[#00796B]" placeholder="Phone Number" type="tel" name="phone-number" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-white" for="email">Email</label>
                            <input class="border-none rounded-full py-2 px-4 w-full text-[#00796B]" placeholder="Email" type="email" name="email" />
                        </div>

                    </div>
                    <div class="lg:flex flex-col lg:flex-row gap-5 lg:gap-2">
                        <div class="flex flex-col gap-2">
                            <label class="text-white" for="company-name">Company Name</label>
                            <input class="border-none rounded-full py-2 px-4 w-full text-[#00796B]" placeholder="Company Name" type="text" name="company-name" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-white" for="website">Website</label>
                            <input class="border-none rounded-full py-2 px-4 w-full text-[#00796B]" placeholder="Website" type="text" name="website" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-white" for="brand">How can we help you?</label>
                        <select class="border-none rounded-full py-2 px-4 w-full text-[#00796B]" value="Branding" name="brand">
                            <option>Branding</option>
                            <option>Livestreaming</option>
                            <option>Videography</option>
                            <option>Web Development</option>
                            <option>Digital Marketing</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-white" for="message">Message</label>
                        <textarea class="border-none rounded-2xl py-2 px-4 w-full text-[#00796B]" rows="6" placeholder="Message" type="text" name="message"></textarea>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="documents" class="text-white">Upload supporting company documents</label>
                        <input label="File types: zip,pdf" accept=".zip,.pdf" class="file:border-none file:rounded-full file:py-2 transition-all duration-100 file:px-4 w-full file:text-[#00796B] text-white file:hover:text-white file:cursor-pointer file:bg-white file:hoverbg-black file:hover:bg-[#009688]" type="file" name="documents" />
                    </div>
                    <button class="rounded-full bg-black hover:bg-[#009688] hover:px-6 py-2 px-4 text-white block m-auto drop-shadow-md submit" type="submit">Submit</button>
                </form>
            </div>
            <?php echo $mapEmbed; ?>
        </div>
    </div>

</div>