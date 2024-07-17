<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <link rel="stylesheet" href="https://use.typekit.net/xgk4jzd.css">
  <script src="https://cdn.tailwindcss.com"></script>

    header .menu-item {
        @apply hover:text-red-700 uppercase;
      }

    .wp-block-image{
      img{
        @apply border-0;
      }
      }
    .wp-block-table td{
      @apply underline decoration-[#CB4C44] border-0 px-10 py-5;
    }
    .wp-block-button__link {
      @apply inline-flex items-center whitespace-nowrap gap-3 p-1;
    }

    .wp-block-custom-post-type-widget-blocks-latest-posts__featured-image {
      @apply object-cover max-w-lg max-h-80;
    }

    .single-post .wp-block-image {
      @apply m-0;

      img {
        @apply border-0;
      }
    }
    
    

    .wp-block-custom-post-type-widget-blocks-latest-posts__featured-image {
      height: 250px;
      overflow: hidden;
    }

    .wp-block-custom-post-type-widget-blocks-latest-posts__list a {
        @apply text-3xl font-normal;
      }
    
    .wp-block-custom-post-type-widget-blocks-latest-posts__list time {
        @apply text-xl font-normal;
      }
    .wp-block-custom-post-type-widget-blocks-latest-posts__post-excerpt{
      @apply text-xl font-light;
    }

    header .menu-item {
      @apply hover:text-red-700 uppercase;
    }
    
    footer .menu-item {
      @apply hover:text-red-700 ;
    }

    .ctc-inline-copy{
      @apply border-2 rounded-lg px-4 py-3 bg-[#CB4C44] text-white;
    } 
    .current-menu-item{
      @apply text-red-700;
    }
      
    .wp-block-buttons:hover div,
    .wp-block-buttons:hover a{
      background-color: #bebebe!important;
    }

    
    .wpcf7-not-valid-tip{
      @apply text-white
    }
    </style>
  <?php wp_head(); ?>

</head>

<body <?php body_class('font-body'); ?>>

  <header class="flex justify-between items-center px-6 py-11">

    <a class="hover:text-red-700 focus:text-red-700" href="<?php echo get_home_url(); ?>">
      <img class="w-full max-w-48" src="<?php echo get_template_directory_uri(); ?>/images/ITASolidale-ETS-payoff.png" alt="logo-itas">
    </a>

    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'primary',
        'container' => 'nav',
        'container_class' => '',
        'menu_class' => 'flex gap-14 ',
      )
    );
    ?>

    <form action="/" method="get">
      <label for="search"></label>
      <div class="flex border-2 border-black m-4 bg-transparent rounded-2 rounded-md py-2 px-2 ">
        <input class="block placeholder-black focus:outline-none" type="search" name="s" id="serch" placeholder="Cerca..." value="<?php the_search_query(); ?>" />
        <button type="submit" class=" flex items-center ">
          <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="13" height="14" fill="#F5F5F5" />
            <rect width="1280" height="2644" transform="translate(-1239 -57)" fill="white" />
            <rect x="-164.75" y="-5" width="185.75" height="24" rx="5.43447" stroke="#18090E" stroke-linejoin="round" />
            <path d="M12.8304 12.0204L10.5915 9.79795C11.4606 8.71354 11.8814 7.33712 11.7675 5.9517C11.6537 4.56629 11.0137 3.27719 9.97928 2.34947C8.94484 1.42175 7.59454 0.925926 6.20602 0.96395C4.8175 1.00197 3.49631 1.57095 2.51412 2.5539C1.53192 3.53684 0.963369 4.85904 0.925374 6.24861C0.887379 7.63818 1.38283 8.98951 2.30984 10.0247C3.23686 11.06 4.52498 11.7004 5.90934 11.8144C7.2937 11.9283 8.66908 11.5071 9.75267 10.6374L11.9734 12.8599C12.0295 12.9165 12.0963 12.9614 12.1698 12.9921C12.2434 13.0227 12.3222 13.0385 12.4019 13.0385C12.4816 13.0385 12.5604 13.0227 12.634 12.9921C12.7075 12.9614 12.7743 12.9165 12.8304 12.8599C12.9391 12.7473 12.9999 12.5968 12.9999 12.4401C12.9999 12.2835 12.9391 12.133 12.8304 12.0204V12.0204ZM6.36719 10.6374C5.53171 10.6374 4.71498 10.3895 4.0203 9.92495C3.32562 9.46042 2.78418 8.80018 2.46445 8.0277C2.14472 7.25523 2.06107 6.40521 2.22406 5.58516C2.38706 4.7651 2.78938 4.01183 3.38016 3.4206C3.97094 2.82938 4.72364 2.42675 5.54307 2.26363C6.36251 2.10051 7.21187 2.18423 7.98376 2.5042C8.75565 2.82417 9.4154 3.36602 9.87957 4.06123C10.3437 4.75644 10.5915 5.57378 10.5915 6.4099C10.5915 7.53111 10.1464 8.60639 9.35422 9.3992C8.56201 10.192 7.48755 10.6374 6.36719 10.6374V10.6374Z" fill="#18090E" />
            <path d="M12.8304 12.0204L10.5915 9.79795C11.4606 8.71354 11.8814 7.33712 11.7675 5.9517C11.6537 4.56629 11.0137 3.27719 9.97928 2.34947C8.94484 1.42175 7.59454 0.925926 6.20602 0.96395C4.8175 1.00197 3.49631 1.57095 2.51412 2.5539C1.53192 3.53684 0.963369 4.85904 0.925374 6.24861C0.887379 7.63818 1.38283 8.98951 2.30984 10.0247C3.23686 11.06 4.52498 11.7004 5.90934 11.8144C7.2937 11.9283 8.66908 11.5071 9.75267 10.6374L11.9734 12.8599C12.0295 12.9165 12.0963 12.9614 12.1698 12.9921C12.2434 13.0227 12.3222 13.0385 12.4019 13.0385C12.4816 13.0385 12.5604 13.0227 12.634 12.9921C12.7075 12.9614 12.7743 12.9165 12.8304 12.8599C12.9391 12.7473 12.9999 12.5968 12.9999 12.4401C12.9999 12.2835 12.9391 12.133 12.8304 12.0204V12.0204ZM6.36719 10.6374C5.53171 10.6374 4.71498 10.3895 4.0203 9.92495C3.32562 9.46042 2.78418 8.80018 2.46445 8.0277C2.14472 7.25523 2.06107 6.40521 2.22406 5.58516C2.38706 4.7651 2.78938 4.01183 3.38016 3.4206C3.97094 2.82938 4.72364 2.42675 5.54307 2.26363C6.36251 2.10051 7.21187 2.18423 7.98376 2.5042C8.75565 2.82417 9.4154 3.36602 9.87957 4.06123C10.3437 4.75644 10.5915 5.57378 10.5915 6.4099C10.5915 7.53111 10.1464 8.60639 9.35422 9.3992C8.56201 10.192 7.48755 10.6374 6.36719 10.6374V10.6374Z" fill="#18090E" />
          </svg>

        </button>
      </div>
    </form>
  </header>