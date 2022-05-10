<?php 
$cinkes_footer_logo = get_theme_mod( 'cinkes_footer_logo' );
$cinkes_copyright_center = $cinkes_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';

/*
cmt_section_footer_1: start section Footer 1
*/
$footer_bg_image = get_theme_mod('footer_bg_image', get_template_directory_uri() . '/assets/img/logo/logo.png');
$footer_bg_color = get_theme_mod('footer_bg_color', __('#1a1a1a', 'cinkes') );
$footer_1_top_switch = get_theme_mod('footer_1_top_switch', false);
$footer_1_top_logo = get_theme_mod('footer_1_top_logo', get_template_directory_uri() . '/assets/img/logo/logo.png');
$footer_1_social_switch = get_theme_mod('footer_1_social_switch', false);
$footer_1_fb_link = get_theme_mod('footer_1_fb_link', __('#', 'cinkes') );
$footer_1_twitter_link = get_theme_mod('footer_1_twitter_link', __('#', 'cinkes') );
$footer_1_linkedin_link = get_theme_mod('footer_1_linkedin_link', __('#', 'cinkes') );
$footer_1_youtube_link = get_theme_mod('footer_1_youtube_link', __('#', 'cinkes') );
$footer_1_widget_switch = get_theme_mod('footer_1_widget_switch', false);
$footer_copyright_switch = get_theme_mod('footer_copyright_switch', false);
$copyright_text = get_theme_mod('copyright_text', __('Copyright © 2022 Cinkes. All Rights Reserved By ThemePhi', 'cinkes'));
$footer_copyright_menu = get_theme_mod('footer_copyright_menu', false);

$social_center = $footer_1_top_logo ? 'text-center text-sm-end' : 'text-center text-sm-center';
$footer_1_logo_center = $footer_1_social_switch ? 'text-center text-sm-start' : 'text-center text-sm-center'; 
$footer_1_logo_center1 = !empty($footer_1_fb_link || $footer_1_twitter_link || $footer_1_linkedin_link || $footer_1_youtube_link) ? 'text-center text-sm-start' : 'text-center text-sm-center';

$copyright_center = $footer_copyright_menu ? 'text-center text-lg-start' : 'text-center text-lg-center';
$copyright_menu_center = !empty($copyright_text) ? 'text-lg-end text-center' : 'text-lg-center text-center';
 // footer_columns
 $footer_columns = 0;
 $footer_widget_limit = get_theme_mod( 'footer_widget_limit', 4 );
 $footer_widget_column = get_theme_mod( 'footer_widget_column', 4 );

 for ( $num = 1; $num <= $footer_widget_limit; $num++ ) {
     if ( is_active_sidebar( 'footer-' . $num ) ) {
         $footer_columns++;
     }
 }

 switch ( $footer_widget_limit ) {
     case '2':
        switch($footer_widget_column) {
            case '2':
                $footer_class[1] = 'col-lg-6 col-md-6';
                $footer_class[2] = 'col-lg-6 col-md-6';
                $footer_class[3] = 'col-lg-6 col-md-6';
                $footer_class[4] = 'col-lg-6 col-md-6';
                break;
            default:
                $footer_class[1] = 'col-lg-6 col-md-6 col-sm-6 cinkes_footer_info';
                $footer_class[2] = 'col-lg-6 col-md-6 col-sm-6 footer_widget_list pl-90';
                $footer_class[3] = 'col-lg-6 col-md-6 col-sm-6 footer_widget_list';
                $footer_class[4] = 'col-lg-6 col-md-6 col-sm-6';
            break;
        }
        break;
    case '3':
        switch($footer_widget_column) {
            case '2':
                $footer_class[1] = 'col-lg-6 col-md-6';
                $footer_class[2] = 'col-lg-6 col-md-6';
                $footer_class[3] = 'col-lg-6 col-md-6';
                $footer_class[4] = 'col-lg-6 col-md-6';
                break;
            case '3':
                $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
                $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
                $footer_class[3] = 'col-xl-4 col-lg-6';
                break;
            default:
                $footer_class[1] = 'col-lg-4 col-md-6 col-sm-6 cinkes_footer_info';
                $footer_class[2] = 'col-lg-4 col-md-6 col-sm-6 footer_widget_list pl-90';
                $footer_class[3] = 'col-lg-4 col-md-6 col-sm-6 footer_widget_list';
                $footer_class[4] = 'col-lg-4 col-md-6 col-sm-6';
            break;
        }
        break;
    case '4':
        switch($footer_widget_column) {
            case '2':
                $footer_class[1] = 'col-lg-6 col-md-6';
                $footer_class[2] = 'col-lg-6 col-md-6';
                $footer_class[3] = 'col-lg-6 col-md-6';
                $footer_class[4] = 'col-lg-6 col-md-6';
                break;
            case '3':
                $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
                $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
                $footer_class[3] = 'col-xl-4 col-lg-6';
                $footer_class[4] = 'col-xl-4 col-lg-6';
                break;
            case '4':
                $footer_class[1] = 'col-lg-3 col-md-6 col-sm-6 cinkes_footer_info';
                $footer_class[2] = 'col-lg-3 col-md-6 col-sm-6 footer_widget_list pl-90';
                $footer_class[3] = 'col-lg-3 col-md-6 col-sm-6 footer_widget_list';
                $footer_class[4] = 'col-lg-3 col-md-6 col-sm-6';
                break;
            default:
                $footer_class[1] = 'col-lg-3 col-md-6 col-sm-6 cinkes_footer_info';
                $footer_class[2] = 'col-lg-3 col-md-6 col-sm-6 footer_widget_list pl-90';
                $footer_class[3] = 'col-lg-3 col-md-6 col-sm-6 footer_widget_list';
                $footer_class[4] = 'col-lg-3 col-md-6 col-sm-6';
            break;
        }
        break;
     default:
         $footer_class = 'col-xl-3 col-lg-3 col-md-6';
         break;
 } 
 
 ?>

<!-- cinkes_footer_area-start -->
<div class="cinkes_footer_area">
    <?php if( !empty($footer_1_top_switch) ) : ?>
    <div class="cinkes_footer_top_area">
        <div class="container">
            <div class="cinkes_footer_border_bottom">
                <div class="row align-items-center justify-content-center">
                    <?php if( !empty($footer_1_top_logo) ) : ?>
                    <div class="col-sm-4">
                        <div class="cinkes_footer_logo <?php print esc_attr($footer_1_logo_center1); ?> <?php print esc_attr($footer_1_logo_center); ?>">
                            <a href="<?php print esc_url( home_url( '/' ) );?>" class="footer_logo">
                                <img src="<?php print esc_url($footer_1_top_logo); ?>" alt="<?php print esc_html__('logo-img', 'cinkes'); ?>">
                            </a>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if( !empty($footer_1_social_switch) && !empty($footer_1_fb_link || $footer_1_twitter_link || $footer_1_linkedin_link || $footer_1_youtube_link) ) : ?>
                    <div class="col-sm-8">
                        <div class="cinkes_footer_social_wrapper <?php print esc_attr($social_center); ?>">
                            <div class="cinkes_footer_social">
                                <?php if( !empty($footer_1_fb_link) ) : ?>
                                <a href="<?php print esc_attr($footer_1_fb_link); ?>"><i class="fab fa-facebook-f"></i></a>
                                <?php endif; ?>
                                <?php if( !empty($footer_1_twitter_link) ) : ?>
                                <a href="<?php print esc_attr($footer_1_twitter_link); ?>"><i class="fab fa-twitter"></i></a>
                                <?php endif; ?>
                                <?php if( !empty($footer_1_linkedin_link) ) : ?>
                                <a href="<?php print esc_attr($footer_1_linkedin_link); ?>"><i class="fab fa-linkedin-in"></i></a>
                                <?php endif; ?>
                                <?php if( !empty($footer_1_youtube_link) ) : ?>
                                <a href="<?php print esc_attr($footer_1_youtube_link); ?>"><i class="fab fa-youtube"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if( !empty($footer_1_widget_switch) ) : ?>
    <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>
    <div class="cinkes_footer_widget_area pt-45">
        <div class="container">
            <div class="cinkes_footer_border_bottom">
                <div class="row">

                  <?php
                  for ( $num = 1; $num <= $footer_columns; $num++ ) {
                        if ( !is_active_sidebar( 'footer-' . $num ) ) {
                            continue;
                        }
                        print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                        dynamic_sidebar( 'footer-' . $num );
                        print '</div>';
                    }
                  ?>

                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    <?php if( !empty($footer_copyright_switch) ) : ?>
    <div class="cinkes_footer_copyright_area pt-40 pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <?php if( !empty($copyright_text) ) : ?>
                <div class="col-xl-6 col-lg-6 <?php print esc_attr($copyright_center); ?> order-2 order-lg-1">
                    <p class="mb-0"><?php print esc_html($copyright_text); ?></p>
                </div>
                <?php endif; ?>
                <?php if( !empty($footer_copyright_menu) ) : ?>
                <div class="col-xl-6 col-lg-6 order-lg-2">
                    <div class="cinkes_copyright_menu <?php print esc_attr($copyright_menu_center); ?> ">
                        <?php cinkes_footer_menu(); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<!-- cinkes_footer_area-end -->