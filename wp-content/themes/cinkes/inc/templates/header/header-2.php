<?php 
    /*
    cmt_section_header_2: start header 2 section
    */
    $cinkes_header2_main_logoset = get_theme_mod( 'cinkes_header2_main_logoset', 'image' );
    $logo_image2 = get_theme_mod( 'logo_image2', get_template_directory_uri() . '/assets/img/logo/logo.png' );
    $logo_size2 = get_theme_mod( 'logo_size2', __('144px', 'cinkes') );
    $logo_text2 = get_theme_mod( 'logo_text2', __('Cinkes', 'cinkes') );

    $cinkes_header2_main_right_switch = get_theme_mod( 'cinkes_header2_main_right_switch', false );
    $cinkes_menu_col = $cinkes_header2_main_right_switch ? 'col-xxl-8 col-xl-7 col-lg-7 d-none d-lg-block' : 'col-xxl-10 col-xl-10 col-lg-10 col-6 text-end';
    $cinkes_menu_position = $cinkes_header2_main_right_switch ? 'text-center cinkes_border_right-2' : 'text-end';

    $cinkes_header2_main_phone_text = get_theme_mod( 'cinkes_header2_main_phone_text', __('Call Us', 'cinkes') );
    $cinkes_header2_main_phone_number = get_theme_mod( 'cinkes_header2_main_phone_number', __('+12-9858741', 'cinkes') );
    $cinkes_header2_main_phone_number_link = get_theme_mod( 'cinkes_header2_main_phone_number_link', __('+12-9858741', 'cinkes') );

?>

<!-- header_area-start -->
<header>
    <div class="cinkes_header_area">
        <div class="cinkes_header_main_area header-transparent header-sticky">
            <div class="container-fluid custom-container">
                <div class="row align-items-center">
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-6">
                        <div class="cinkes_logo_section2">
                            <?php cinkes_header2_logo(); ?>
                        </div>
                    </div>
                    <div class="<?php print esc_html($cinkes_menu_col); ?>">
                        <div class="cinkes_main_menu cinkes_logo_bg_before <?php print esc_attr($cinkes_menu_position); ?>">
                            <nav id="mobile-menu" class="cinkes_menu mobile-menu">
                                <?php cinkes_header_menu(); ?>
                            </nav>
                        </div>
                    </div>

                    <?php if( !empty($cinkes_header2_main_right_switch) ) : ?>
                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-sm-6 d-none d-lg-block">
                        <div class="cinkes_header_quick_info_wrapper text-end pl-50">
                            <div class="cinkes_header_quick_info text-start d-inline-block">
                                <div class="cinkes_quick_contact quick_contact_2">
                                    <span class="cinkes_quick_icon"><i class="fal fa-phone-plus"></i></span>
                                    <div class="cinkes_quick_text d-inline-block">
                                    	<?php if( !empty($cinkes_header2_main_phone_text) ) : ?>
                                        <span><?php print esc_html($cinkes_header2_main_phone_text); ?></span>
                                    	<?php endif; ?>
                                    	<?php if( !empty($cinkes_header2_main_phone_number) ) : ?>
                                        <a href="tel:<?php print esc_attr($cinkes_header2_main_phone_number_link); ?>"><?php print esc_html($cinkes_header2_main_phone_number); ?></a>
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