<?php 
    /*
    cmt_section_header_topbar_1: start section topbar 1
    */
   $cinkes_topbar_switch = get_theme_mod( 'cinkes_topbar_switch', false );

   $cinkes_header_top_welcome_text_switch = get_theme_mod( 'cinkes_header_top_welcome_text_switch', false );
   $cinkes_header_top_welcome_text = get_theme_mod( 'cinkes_header_top_welcome_text', __( 'Wellcome To Our Financial Company', 'cinkes' ) );

   $cinkes_header_top_opening_hour_switch = get_theme_mod( 'cinkes_header_top_opening_hour_switch', false );
   $cinkes_header_top_opening_hour = get_theme_mod( 'cinkes_header_top_opening_hour', __( 'Our Opening Hours Mon- Fri', 'cinkes' ) );

   $cinkes_header_top_email_address_switch = get_theme_mod( 'cinkes_header_top_email_address_switch', false );
   $cinkes_header_top_email_address = get_theme_mod( 'cinkes_header_top_email_address', __( 'cinkes@gmail.com', 'cinkes' ) );
   $cinkes_header_top_email_link = get_theme_mod( 'cinkes_header_top_email_link', __( 'cinkes@gmail.com', 'cinkes' ) );

   $cinkes_header_top_location_switch = get_theme_mod( 'cinkes_header_top_location_switch', false );
   $cinkes_header_top_location = get_theme_mod( 'cinkes_header_top_location', __( '103 Road kagpur, Dhaka', 'cinkes' ) );

   $cinkes_header_top_button_switch = get_theme_mod( 'cinkes_header_top_button_switch', false );
   $cinkes_header_top_button_text = get_theme_mod( 'cinkes_header_top_button_text', __( 'Let\'s Talk', 'cinkes' ) );
   $cinkes_header_top_button_link = get_theme_mod( 'cinkes_header_top_button_link', __( 'https://yoururl.com/', 'cinkes' ) );

    /*
    cmt_section_header_1: start section header 1
    */
    $cinkes_header_main_logoset = get_theme_mod( 'cinkes_header_main_logoset', 'image' );
    $logo_image = get_theme_mod( 'logo_image', get_template_directory_uri() . '/assets/img/logo/logo.png' );
    $logo_size = get_theme_mod( 'logo_size', __('144px', 'cinkes') );
    $logo_text = get_theme_mod( 'logo_text', __('Cinkes', 'cinkes') );

    $cinkes_header_main_right_switch = get_theme_mod( 'cinkes_header_main_right_switch', false );
    $cinkes_menu_col = $cinkes_header_main_right_switch ? 'col-xxl-8 col-xl-7 col-lg-7 d-none d-lg-block' : 'col-xxl-10 col-xl-10 col-lg-10 col-6';
    $cinkes_menu_position = $cinkes_header_main_right_switch ? 'text-center cinkes_border_right' : 'text-end';
    $cinkes_header_main_phone_text = get_theme_mod( 'cinkes_header_main_phone_text', __('Call Us', 'cinkes') );
    $cinkes_header_main_phone_number = get_theme_mod( 'cinkes_header_main_phone_number', __('+12-9858741', 'cinkes') );
    $cinkes_header_main_phone_number_link = get_theme_mod( 'cinkes_header_main_phone_number_link', __('+12-9858741', 'cinkes') );

?>

<!-- header_area-start -->
<header>
    <div class="cinkes_header_area">
        <?php if( !empty($cinkes_topbar_switch) ) : ?>
        <div class="cinkes_header_top_area cinkes_black d-none d-lg-block">
            <div class="container-fluid custom-container">
                <div class="row align-items-center justify-content-center">

                    <?php if( !empty($cinkes_header_top_welcome_text_switch) ) : ?>
                    <div class="col-xxl-3 col-xl-12 col-lg-12">
                        <div class="cinkes_header_address_info text-lg-center text-xxl-start">
                            <p class="mb-0"><?php print esc_html($cinkes_header_top_welcome_text); ?></p>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if( !empty($cinkes_header_top_opening_hour_switch) ) : ?>
                    <div class="col-xxl-3 col-xl-3 col-lg-4">
                        <div class="cinkes_single_contact_step cinkes_address_info">
                            <i class="far fa-clock"></i>
                            <span><?php print esc_html($cinkes_header_top_opening_hour); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if( !empty($cinkes_header_top_email_address_switch) ) : ?>
                    <div class="col-xxl-2 col-xl-3 col-lg-3">
                        <div class="cinkes_single_contact_step cinkes_address_info">
                            <i class="fal fa-envelope"></i>
                            <?php if( !empty($cinkes_header_top_email_address) ) : ?>
                            <a href="mailto:<?php print esc_attr($cinkes_header_top_email_link); ?>"><?php print esc_html($cinkes_header_top_email_address); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if( !empty($cinkes_header_top_location_switch) ) : ?>
                    <div class="col-xxl-2 col-xl-3 col-lg-3">
                        <div class="cinkes_single_contact_step cinkes_address_info">
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php print esc_html($cinkes_header_top_location); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if( !empty($cinkes_header_top_button_switch) ) : ?>
                    <div class="col-xxl-2 col-xl-3 col-lg-2">
                        <div class="cinkes_header_top_button text-end">
                            <?php if( !empty($cinkes_header_top_button_text) ) : ?>
                            <a href="<?php print esc_url($cinkes_header_top_button_link); ?>" class="cinkes_btn theme_bg black_hover"><?php print esc_html($cinkes_header_top_button_text); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="cinkes_header_main_area header-sticky">
            <div class="container-fluid custom-container">
                <div class="row align-items-center">
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-6">
                        <div class="cinkes_logo_section">
                            <?php cinkes_header_logo(); ?>
                        </div>
                    </div>
                    <div class="<?php print esc_attr($cinkes_menu_col); ?>">
                        <div class="cinkes_main_menu cinkes_logo_bg_before <?php print esc_attr($cinkes_menu_position); ?>">
                            <nav id="mobile-menu" class="cinkes_menu mobile-menu">
                                <?php cinkes_header_menu(); ?>
                            </nav>
                        </div>
                    </div>

                    <?php if( !empty($cinkes_header_main_right_switch) ) : ?>
                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-sm-6 d-none d-lg-block">
                        <div class="cinkes_header_quick_info_wrapper text-end pl-50">
                            <div class="cinkes_header_quick_info text-start d-inline-block">
                                <div class="cinkes_quick_contact">
                                    <span class="cinkes_quick_icon"><i class="fal fa-phone-plus"></i></span>
                                    <div class="cinkes_quick_text d-inline-block">
                                        <?php if( !empty($cinkes_header_main_phone_text) ) : ?>
                                        <span><?php print esc_html($cinkes_header_main_phone_text); ?></span>
                                        <?php endif; ?>
                                        <?php if( !empty($cinkes_header_main_phone_number) ) : ?>
                                        <a href="tel:<?php print esc_attr($cinkes_header_main_phone_number_link); ?>"><?php print esc_html($cinkes_header_main_phone_number); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="col-6 text-end d-lg-none">
                        <div class="menu_bars">
                            <button class="side-toggle nav-expander bar" id="nav-expander"><i class="far fa-bars"></i></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- header_area-end -->