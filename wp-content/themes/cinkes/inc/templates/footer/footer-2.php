<?php 
    $footer_bg_img = get_theme_mod( 'cinkes_footer_bg' );
    $cinkes_footer_logo = get_theme_mod( 'cinkes_footer_logo' );
    $cinkes_footer_top_space = function_exists('get_field') ? get_field('cinkes_footer_top_space') : '0';
    $cinkes_copyright_center = $cinkes_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
    $cinkes_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'cinkes_footer_bg' ) : '';
    $cinkes_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'cinkes_footer_bg_color' ) : '';
    $footer_bg_color = get_theme_mod( 'cinkes_footer_bg_color' );
    $footer_top_space = get_theme_mod( 'cinkes_footer_top_space' );
    $footer_copyright_switch = get_theme_mod( 'footer_copyright_switch', true );

    // bg image
    $bg_img = !empty( $cinkes_footer_bg_url_from_page['url'] ) ? $cinkes_footer_bg_url_from_page['url'] : $footer_bg_img;

    // bg color
    $bg_color = !empty( $cinkes_footer_bg_color_from_page ) ? $cinkes_footer_bg_color_from_page : $footer_bg_color;

   // footer space
    $footer_space = !empty( $cinkes_footer_top_space ) ? $cinkes_footer_top_space : $footer_top_space;

    $footer_columns = 0;
    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        if ( is_active_sidebar( 'footer-2-' . $num ) ) {
            $footer_columns++;
        }
    }

    switch ( $footer_columns ) {
    case '1':
        $footer_class[1] = 'col-lg-12';
        break;
    case '2':
        $footer_class[1] = 'col-lg-6 col-md-6';
        $footer_class[2] = 'col-lg-6 col-md-6';
        break;
    case '3':
        $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
        $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
        $footer_class[3] = 'col-xl-4 col-lg-6';
        break;
    case '4':
        $footer_class[1] = 'col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6';
        $footer_class[2] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6';
        $footer_class[3] = 'col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6';
        $footer_class[4] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6';
        break;
    case '5':
        $footer_class[1] = 'col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6';
        $footer_class[2] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 footer__pl-70';
        $footer_class[3] = 'col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 footer__pl-90';
        $footer_class[4] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6';
        $footer_class[5] = 'col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6';
        break;
    default:
        $footer_class = 'col-xl-3 col-lg-3 col-md-6';
        break;
    }

    ?>


    <!-- footer area start -->
    <footer>
    <?php if ( is_active_sidebar( 'footer-2-1' ) OR is_active_sidebar( 'footer-2-2' ) OR is_active_sidebar( 'footer-2-3' ) OR is_active_sidebar( 'footer-2-4' ) ): ?>
        <div class="footer__area grey-bg-2">
        <?php if ( is_active_sidebar('footer-2-1') OR is_active_sidebar('footer-2-2') OR is_active_sidebar('footer-2-3') OR is_active_sidebar('footer-2-4') ): ?>
            <div class="footer__top pt-190 pb-40">
                <div class="container">
                    <div class="row">
                        <?php
                            if ( $footer_columns < 5 ) {
                            print '<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">';
                            dynamic_sidebar( 'footer-2-1' );
                            print '</div>';

                            print '<div class="col-xxl-2 offset-xxl-1 col-xl-2 offset-xl-1 col-lg-3 offset-lg-0 col-md-2 offset-md-1 col-sm-5 offset-sm-0">';
                            dynamic_sidebar( 'footer-2-2' );
                            print '</div>';

                            print '<div class="col-xxl-2 col-xl-2 col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6">';
                            dynamic_sidebar( 'footer-2-3' );
                            print '</div>';

                            print '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-6">';
                            dynamic_sidebar( 'footer-2-4' );
                            print '</div>';
                            } else {
                                for ( $num = 1; $num <= $footer_columns; $num++ ) {
                                    if ( !is_active_sidebar( 'footer-2-' . $num ) ) {
                                        continue;
                                    }
                                    print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                                    dynamic_sidebar( 'footer-2-' . $num );
                                    print '</div>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="footer__bottom footer__bottom-2">
                <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="footer__copyright footer__copyright-2 text-center">
                            <p><?php print cinkes_copyright_text(); ?></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    </footer>