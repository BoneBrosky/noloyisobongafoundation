<!DOCTYPE html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri("/index-76d6af0b.css") ?>">
    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Google Icons -->
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Abongile Zozi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.2/axios.min.js" integrity="sha512-b94Z6431JyXY14iSXwgzeZurHHRNkLt9d6bAHt7BZT38eqV+GyngIi/tVye4jBKPYQ2lBdRs0glww4fmpuLRwA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="<?php echo get_theme_file_uri() . "/js/main.js" ?>" type="module" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <?php wp_head(); ?>
    <style>
        @media only screen and (max-width: 600px) {
            .menu {
                flex-direction: column;
            }

            .donate .wp-block-image {
                width: 100% !important;
            }

            /* .menu-item-has-children:hover>.sub-menu {
                display: unset;
            } */

            .menu-item-w-icon span {
                background-color: #fdb515;
                border-radius: 99999px;
                color: #08784a;
                /* padding: 8px 10px !important; */
                padding: 10px;
            }

            .menu-item-w-icon a {
                all: unset !important;
                /* padding: 8px 10px !important; */
            }

            .menu-item a:not(.menu-item .sub-menu .menu-item a) {
                width: 100% !important;
            }

            .sub-menu {
                width: 100%;
                z-index: 1;
                background-color: #08784a !important;
                filter: drop-shadow(2px 4px 20px #0000006b);
                top: 3.8rem !important;
            }

            .donate-container {
                margin-top: 10px;
            }

            .menu-item .sub-menu .menu-item:hover {
                background-color: #fff !important;
            }

            .menu-item .sub-menu .menu-item a {
                color: #fff !important;
            }

            .menu-item .sub-menu .menu-item:hover a {
                color: #08784a !important;
            }
        }

        * {
            transition: all .5s;
            scroll-behavior: smooth
        }

        .wp-element-caption {
            text-align: center;
        }

        /* Progress */
        .pure-material-progress-linear {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border: none;
            height: 0.25em;
            color: rgb(var(--pure-material-primary-rgb, 33, 150, 243));
            background-color: rgba(var(--pure-material-primary-rgb, 33, 150, 243), 0.12);
            font-size: 16px;
            border-radius: 99999px;
        }

        .pure-material-progress-linear::-webkit-progress-bar {
            background-color: transparent;
        }

        /* Determinate */
        .pure-material-progress-linear::-webkit-progress-value {
            background-color: currentColor;
            transition: all 0.5s;
        }

        .pure-material-progress-linear::-moz-progress-bar {
            background-color: currentColor;
            transition: all 0.5s;
        }

        .pure-material-progress-linear::-ms-fill {
            border: none;
            background-color: currentColor;
            transition: all 0.5s;
        }

        /* Indeterminate */
        .pure-material-progress-linear:indeterminate {
            background-size: 200% 100%;
            background-image: linear-gradient(to right, transparent 50%, currentColor 50%, currentColor 60%, transparent 60%, transparent 71.5%, currentColor 71.5%, currentColor 84%, transparent 84%);
            animation: pure-material-progress-linear 4s infinite linear;
        }

        .pure-material-progress-linear:indeterminate::-moz-progress-bar {
            background-color: transparent;
        }

        .pure-material-progress-linear:indeterminate::-ms-fill {
            animation-name: none;
        }

        @keyframes pure-material-progress-linear {
            0% {
                background-size: 200% 100%;
                background-position: left -31.25% top 0%;
            }

            50% {
                background-size: 800% 100%;
                background-position: left -49% top 0%;
            }

            100% {
                background-size: 400% 100%;
                background-position: left -102% top 0%;
            }
        }

        /*----------------------- Preloader -----------------------*/
        body.preloader-site {
            overflow: hidden;
        }

        .preloader-wrapper {
            height: 100%;
            width: 100%;
            background: #FFF;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999999;
        }

        .preloader-wrapper .preloader {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 250px;
        }

        /* main menu */
        .menu-item-w-icon {
            display: flex;
            gap: 10px;
            flex-direction: row-reverse;
            padding: 8px 10px !important;
            align-items: center;
            color: #08784a;
            border-radius: 99999px;
            font-weight: 700;
        }

        .menu-item-w-icon:hover {
            background-color: #08784a;
            color: #fff;
        }

        .menu-item-w-icon span {
            /* padding-right: 10px; */
            cursor: pointer;
        }

        .menu-item-w-icon a {
            all: unset !important;
            /* padding: 8px 10px !important; */
            cursor: pointer !important;
        }

        .menu {
            display: flex;
            gap: 16px;
            transition: all .3s;
            /* text-transform: uppercase; */
        }

        .menu-item a:not(.menu-item .sub-menu .menu-item a) {
            padding: 8px 10px;
            display: block;
            border-radius: 99999px;
            width: max-content;
            color: #08784a;
            font-weight: 700;
        }

        .main-nav .menu-item a:hover:not(.menu-item .sub-menu .menu-item a) {
            background-color: #08784a;
            color: #fff;
        }

        .menu-item:not(.menu-item .sub-menu .menu-item a) {
            position: relative;
        }

        .menu-item .sub-menu .menu-item {
            padding: 8px 20px;
            color: #08784a;
            font-weight: bold;
        }

        .menu-item .sub-menu .menu-item:hover {
            background-color: #08784a;
            color: #fff;
        }

        .sub-menu {
            background-color: #fff;
            border-radius: 24px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 2.5rem;
            overflow: hidden;
            display: none;
        }

        /* .menu-item-has-children:hover>.sub-menu {
            display: block;
        } */

        .donate-container .menu-item {
            color: unset;
            border-radius: 99999px;
        }

        .donate-container .menu-item:first-of-type {
            background-color: #fdb515;
        }

        .donate-container .menu-item:last-of-type {
            background-color: #08784a;
        }

        .donate-container .menu-item a {
            color: #fff !important;
            font-weight: normal !important;
        }

        .donate-container .menu-item:hover:first-of-type {
            background-color: #08784a;
        }

        .donate-container .menu-item:hover:last-of-type {
            background-color: #fdb515;
        }

        .search-input form {
            display: flex;
            gap: 20px;
        }

        .search-field,
        .search-submit {
            padding: 8px 32px;
            border-radius: 99999px;
            font-weight: bold;
        }

        .search-field {
            border: 2px solid #fdb515;
            color: #08784a;
            width: 100%;
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            background-color: unset;
        }

        .search-submit {
            padding: 8px 20px;
            background-color: #08784a !important;
            color: #fff;
            cursor: pointer;
            font-weight: normal;
        }

        .search-submit:hover {
            background-color: #fdb515 !important;
        }

        .page-numbers:not(.nav-links .prev):not(.nav-links .next) {
            padding: 8px;
            width: 40px;
            height: 40px;
            text-align: center;
            border-radius: 99999px;
        }

        .search-meta {
            font-style: italic !important;
        }

        .nav-links {
            width: fit-content;
            margin: auto;
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .current {
            background-color: #fdb515;
            color: #fff;
        }

        .current:hover {
            background-color: #08784a;
        }

        .next,
        .prev {
            padding: 8px 16px;
            border-radius: 99999px;
            font-weight: bold;
            color: #fff;
        }

        .next,
        .prev {
            background-color: #08784a;
        }

        .next:hover,
        .prev:hover {
            background-color: #fdb515;
        }

        /* end Main menu */
        .wp-block-gallery>figure>.wp-element-caption {
            position: relative !important;
            background: transparent !important;
            color: #000 !important;
            text-align: left !important;
        }

        .wp-block-gallery.wp-block-gallery-1 {
            gap: 50px !important;
        }

        .icon-rotate {
            transform: rotate(180deg);
        }

        .margin {
            margin: 20px 0;
        }

        .MuiAccordionSummary-gutters {
            display: flex;
            justify-content: space-around;
        }

        .css-1elwnq4-MuiPaper-root-MuiAccordion-root {
            color: white !important;
        }

        .css-67l5gl:nth-child(odd) .css-9l3uo3,
        .css-67l5gl:nth-child(odd) .css-vubbuv {
            color: white !important;
        }

        .css-67l5gl:nth-child(even) .css-9l3uo3,
        .css-67l5gl:nth-child(even) .css-vubbuv {
            color: #000 !important;
        }

        .css-1elwnq4-MuiPaper-root-MuiAccordion-root:nth-child(odd),
        .css-67l5gl:nth-child(odd) {
            background-color: #08784a !important;
            color: white !important;
        }

        .css-67l5gl:nth-child(odd) svg {
            fill: white !important;
        }

        .css-yw020d-MuiAccordionSummary-expandIconWrapper {
            color: #000 !important;
        }


        .css-1elwnq4-MuiPaper-root-MuiAccordion-root:nth-child(even),
        .css-67l5gl:nth-child(even) {
            background-color: #fdb515 !important;
            color: #000 !important;
        }
    </style>
</head>