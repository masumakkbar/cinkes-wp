<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package cinkes
 */

/** 
 *
 * cinkes header
 */

function cinkes_check_header() {
    $cinkes_header_style = function_exists( 'get_field' ) ? get_field( 'header_style' ) : NULL;
    $cinkes_default_header_style = get_theme_mod( 'choose_default_header', 'header-style-1' );

    if ( $cinkes_header_style == 'header-style-1' && empty($_GET['s']) ) {
        cinkes_header_style_1();
    } 
    elseif ( $cinkes_header_style == 'header-style-2' && empty($_GET['s']) ) {
        cinkes_header_style_2();
    } 
    else {
        /** default header style **/
        if ( $cinkes_default_header_style == 'header-style-2' ) {
            cinkes_header_style_2();
        } 
        else {
            cinkes_header_style_1();
        }
    }

}
add_action( 'cinkes_header_style', 'cinkes_check_header', 10 );


// Header deafult
function cinkes_header_style_1() {
   get_template_part( '/inc/templates/header/header', '1' );
    
   cinkes_side_info(); ?>
   <div class="offwrap"></div>
   <!-- sidebar area end -->

<?php
}



/**
 * header style 2
 */
 function cinkes_header_style_2() { ?>

   <?php get_template_part( '/inc/templates/header/header', '2' );

   cinkes_side_info(); ?>
   <!-- side info end -->     
   <div class="offwrap"></div>
   <!-- sidebar area end -->

<?php
}

// cinkes_side_info
function cinkes_side_info() {

   $cinkes_side_logo = get_theme_mod('cinkes_side_logo', get_template_directory_uri() . '/assets/img/logo/logo.png');
   $cinkes_side_contact_switcher = get_theme_mod('cinkes_side_contact_switcher', false);
    $cinkes_side_contact_title = get_theme_mod( 'cinkes_side_contact_title', __( 'Contact Info', 'cinkes' ) );
    $cinkes_side_contact_address = get_theme_mod( 'cinkes_side_contact_address', __( '12/A, Mirnada City Tower, NYC', 'cinkes' ) );
    $cinkes_side_contact_phone = get_theme_mod( 'cinkes_side_contact_phone', __( '088889797697', 'cinkes' ) );
    $cinkes_side_contact_phone_link = get_theme_mod( 'cinkes_side_contact_phone_link', __( '088889797697', 'cinkes' ) );
    $cinkes_side_mail = get_theme_mod( 'cinkes_side_mail', __( 'info@cinkes.com', 'cinkes' ) );
    $cinkes_side_mail_link = get_theme_mod( 'cinkes_side_mail_link', __( 'info@cinkes.com', 'cinkes' ) );
   
   $cinkes_side_contact_switcher = get_theme_mod('cinkes_side_contact_switcher', false);
   $cinkes_side_social_fb_link = get_theme_mod('cinkes_side_social_fb_link', 'cinkes');
   $cinkes_side_social_twitter_link = get_theme_mod('cinkes_side_social_twitter_link', 'cinkes');
   $cinkes_side_social_linkedin_link = get_theme_mod('cinkes_side_social_linkedin_link', 'cinkes');
   $cinkes_side_social_youtube_link = get_theme_mod('cinkes_side_social_youtube_link', 'cinkes');

?>
    
   <!-- sidebar area start -->
    <nav class="right_menu_togle">

      <div class="offset-widget offset-logo mb-30 pb-20">
          <div class="row align-items-center justify-content-center">
              <?php if( !empty($cinkes_side_logo) ) : ?>
              <div class="col-8">
                <a href="<?php print esc_url( home_url( '/' ) );?>" class="mobile_logo">
                  <img src="<?php print esc_url($cinkes_side_logo); ?>" alt="<?php print esc_attr__('Side Logo', 'cinkes'); ?>">
                </a>
              </div>
              <?php endif; ?>
              <div class="col-4 text-end">
                <button id="nav-close" class="nav-close"><i class="fal fa-times"></i></button>
              </div>
          </div>
          
      </div>

      <div class="mobile_menu fix"></div>

      <div class="contact-infos mt-40">
          <?php if( !empty($cinkes_side_contact_switcher) ) : ?>
          <div class="contact-list mobile_contact mb-40">
              <?php if( !empty($cinkes_side_contact_title) ) : ?>
              <h4><?php print esc_html($cinkes_side_contact_title); ?></h4>
              <?php endif; ?>
              <?php if( !empty($cinkes_side_contact_address) ) : ?>
              <span class="sidebar-address"><i class="fal fa-map-marker-alt"></i><span><?php print esc_html($cinkes_side_contact_address); ?></span> </span>
              <?php endif; ?>
              <?php if( !empty($cinkes_side_contact_phone) ) : ?>
              <a href="tel:<?php print esc_attr($cinkes_side_contact_phone_link); ?>"><i class="fal fa-phone"></i><span><?php print esc_html($cinkes_side_contact_phone); ?></span></a>
              <?php endif; ?>
              <?php if( !empty($cinkes_side_mail) ) : ?>
              <a href="mailto:<?php print esc_attr($cinkes_side_mail_link); ?>" class="theme-3"><i class="far fa-envelope"></i><span><span><?php print esc_html($cinkes_side_mail); ?></span></span></a>   
              <?php endif; ?>

          </div>
          <?php endif; ?>

          <?php if(!empty($cinkes_side_contact_switcher)) : ?>
          <div class="top_social footer_social offset_social mt-40 mb-30">
              <?php if(!empty($cinkes_side_social_fb_link)) : ?>
              <a href="<?php print esc_attr($cinkes_side_social_fb_link); ?>" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
              <?php endif; ?>
              <?php if(!empty($cinkes_side_social_twitter_link)) : ?>
              <a href="<?php print esc_attr($cinkes_side_social_twitter_link); ?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
              <?php endif; ?>
              <?php if(!empty($cinkes_side_social_linkedin_link)) : ?>
              <a href="<?php print esc_attr($cinkes_side_social_linkedin_link); ?>" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>
              <?php endif; ?>
              <?php if(!empty($cinkes_side_social_youtube_link)) : ?>
              <a href="<?php print esc_attr($cinkes_side_social_youtube_link); ?>" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
              <?php endif; ?>
          </div>
          <?php endif; ?>
      </div>

    </nav>
   <!-- sidebar area end -->
<?php }


/**
 * [cinkes_language_list description]
 * @return [type] [description]
 */
function _cinkes_language( $mar ) {
    return $mar;
}
function cinkes_language_list() {

    $mar = '';
    $languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
    if ( !empty( $languages ) ) {
        $mar = '<ul>';
        foreach ( $languages as $lan ) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul>';
        $mar .= '<li><a href="#">' . esc_html__( 'USA', 'cinkes' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'UK', 'cinkes' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'CA', 'cinkes' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'AU', 'cinkes' ) . '</a></li>';
        $mar .= ' </ul>';
    }
    print _cinkes_language( $mar );
}
add_action( 'cinkes_language', 'cinkes_language_list' );

// favicon logo
function cinkes_favicon_logo_func() {
        $cinkes_favicon = get_template_directory_uri() . '/assets/img/favicon.png';
        $cinkes_favicon_url = get_theme_mod( 'favicon_url', $cinkes_favicon );
    ?>

    <link rel="shortcut icon" type="image/x-icon" href="<?php print esc_url( $cinkes_favicon_url );?>">

    <?php
}
add_action( 'wp_head', 'cinkes_favicon_logo_func' );

/*
header_logo
*/
function cinkes_header_logo() {
    ?>
    <?php
        $cinkes_logo_on = function_exists( 'get_field' ) ? get_field( 'is_enable_sec_logo' ) : NULL;
        $cinkes_logo = get_template_directory_uri() . '/assets/img/logo/logo.png';
        $cinkes_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-white.png';

        $cinkes_site_logo = get_theme_mod( 'logo_image', $cinkes_logo );
        $cinkes_secondary_logo = get_theme_mod( 'seconday_logo', $cinkes_logo_black );

        $cinkes_header_main_logoset = get_theme_mod('cinkes_header_main_logoset', 'image');
        $logo_text = get_theme_mod('logo_text', __('Cinkes', 'cinkes') );

    ?>

      <?php
          if ( has_custom_logo() ) {
              the_custom_logo();
          } else {
            if($cinkes_header_main_logoset == 'image') {

              if ( !empty( $cinkes_logo_on ) ) {
                  ?>
                      <a class="cinkes_logo" href="<?php print esc_url( home_url( '/' ) );?>">
                          <img src="<?php print esc_url( $cinkes_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'cinkes' );?>" />
                      </a>
                  <?php
              } else {
                  ?>
                      <a class="cinkes_logo" href="<?php print esc_url( home_url( '/' ) );?>">
                          <img src="<?php print esc_url( $cinkes_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'cinkes' );?>" />
                      </a>
                  <?php
              }
            } else { ?>
                      <a class="cinkes_logo logo-text" href="<?php print esc_url( home_url( '/' ) );?>">
                          <span><?php print esc_html($logo_text); ?></span>
                      </a>
              <?php
            }
          } 
      ?>
    <?php
}



/*
header2_logo
*/
function cinkes_header2_logo() {
    ?>
    <?php
        $cinkes_logo_on = function_exists( 'get_field' ) ? get_field( 'is_enable_sec_logo' ) : NULL;
        $cinkes_logo = get_template_directory_uri() . '/assets/img/logo/logo.png';
        $cinkes_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-white.png';

        $cinkes_site_logo = get_theme_mod( 'logo_image2', $cinkes_logo );
        $cinkes_secondary_logo = get_theme_mod( 'seconday_logo', $cinkes_logo_black );

        $cinkes_header2_main_logoset = get_theme_mod('cinkes_header2_main_logoset', 'image');
        $logo_text2 = get_theme_mod('logo_text2', __('Cinkes', 'cinkes') );

    ?>

      <?php
          if ( has_custom_logo() ) {
              the_custom_logo();
          } else {
            if($cinkes_header2_main_logoset == 'image') {

              if ( !empty( $cinkes_logo_on ) ) {
                  ?>
                      <a class="cinkes_logo" href="<?php print esc_url( home_url( '/' ) );?>">
                          <img src="<?php print esc_url( $cinkes_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'cinkes' );?>" />
                      </a>
                  <?php
              } else {
                  ?>
                      <a class="cinkes_logo" href="<?php print esc_url( home_url( '/' ) );?>">
                          <img src="<?php print esc_url( $cinkes_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'cinkes' );?>" />
                      </a>
                  <?php
              }
            } else { ?>
                      <a class="cinkes_logo logo-text" href="<?php print esc_url( home_url( '/' ) );?>">
                          <span><?php print esc_html($logo_text2); ?></span>
                      </a>
              <?php
            }
          } 
      ?>
    <?php
}

// Logo size 
function cinkes_logo_size(){
    $logo_size = get_theme_mod( 'logo_size', __('130px', 'cinkes') );
    $logo_size2 = get_theme_mod( 'logo_size2', __('130px', 'cinkes') );
    wp_enqueue_style( 'cinkes-custom', CINKES_THEME_CSS_DIR . 'cinkes-custom.css', array());
    if($logo_size2!=''){
        $custom_css = '';
        $custom_css .= ".cinkes_logo_section img { width: ".$logo_size."px}";
        $custom_css .= ".cinkes_logo_section2 img { width: ".$logo_size2."px}";

        wp_add_inline_style('cinkes-custom',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'cinkes_logo_size');

// header logo
function cinkes_header_sticky_logo() {?>
    <?php
        $cinkes_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-black.png';
        $cinkes_secondary_logo = get_theme_mod( 'seconday_logo', $cinkes_logo_black );
    ?>
      <a class="sticky-logo" href="<?php print esc_url( home_url( '/' ) );?>">
          <img src="<?php print esc_url( $cinkes_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'cinkes' );?>" />
      </a>
    <?php
}

function cinkes_mobile_logo() {
    // side info
    $cinkes_mobile_logo_hide = get_theme_mod( 'cinkes_mobile_logo_hide', false );

    $cinkes_site_logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/img/logo/logo.png' );

    ?>

    <?php if ( !empty( $cinkes_mobile_logo_hide ) ): ?>
    <div class="side__logo mb-25">
        <a class="sideinfo-logo" href="<?php print esc_url( home_url( '/' ) );?>">
            <img src="<?php print esc_url( $cinkes_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'cinkes' );?>" />
        </a>
    </div>
    <?php endif;?>



<?php }


/**
 * [cinkes_header_menu description]
 * @return [type] [description]
 */
function cinkes_header_menu() {
    ?>
    <?php
        wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
            'walker'         => new WP_Bootstrap_Navwalker,
        ] );
    ?>
    <?php
}

/**
 * [cinkes_footer_menu description]
 * @return [type] [description]
 */
function cinkes_footer_menu() {
    wp_nav_menu( [
        'theme_location' => 'footer-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
    ] );
}


/**
 *
 * cinkes footer
 */
add_action( 'cinkes_footer_style', 'cinkes_check_footer', 10 );

function cinkes_check_footer() {
    $cinkes_footer_style = function_exists( 'get_field' ) ? get_field( 'footer_style' ) : NULL;
    $cinkes_default_footer_style = get_theme_mod( 'choose_default_footer', 'footer-style-1' );

    if ( $cinkes_footer_style == 'footer-style-1' ) {
        cinkes_footer_style_1();
    } elseif ( $cinkes_footer_style == 'footer-style-2' ) {
        cinkes_footer_style_2();
    } elseif ( $cinkes_footer_style == 'footer-style-3' ) {
        cinkes_footer_style_3();
    } else {

        /** default footer style **/
        if ( $cinkes_default_footer_style == 'footer-style-2' ) {
            cinkes_footer_style_2();
        } elseif ( $cinkes_default_footer_style == 'footer-style-3' ) {
            cinkes_footer_style_3();
        } else {
            cinkes_footer_style_1();
        }

    }
}

/**
 * footer  style_defaut
 */
function cinkes_footer_style_1() { ?>

    <?php get_template_part( '/inc/templates/footer/footer', '1' ); ?>

<?php
}

/**
 * footer  style 2
 */
function cinkes_footer_style_2() { ?>
    <?php get_template_part( './inc/templates/footer/footer', '2' ); ?>
<?php
}

// cinkes_copyright_text
function cinkes_copyright_text() {
   print get_theme_mod( 'cinkes_copyright', esc_html__( 'Copyright ©2022 Theme_pure. All Rights Reserved Copyright', 'cinkes' ) );
}

/**
 * [cinkes_breadcrumb_func description]
 * @return [type] [description]
 */
function cinkes_breadcrumb_func() {
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;
    $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image') : '';
    $select_breadcrumb_page = get_theme_mod('select_breadcrumb_page');
     $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'page',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    $post_ids = array();
    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            array_push($post_ids, get_the_ID());
        }
        wp_reset_query();
    }
      function get_breadcrumb_page_by_id_specific2($id)
       {
          $args = array(
              'posts_per_page' => -1,
              'post_type'      => 'page',
              'post_status' => 'publish'
          );
          $query = new WP_Query($args);
          $post_ids = array();
          if($query->have_posts()) {
              while($query->have_posts()) {
                  $query->the_post();
                  array_push($post_ids, get_the_ID());
              }
              wp_reset_query();
          }
          return $post_ids[$id];
      }

      for($i = 0;$i<count($post_ids);$i+=1) {
        $breadcrumb_title_from_page[get_breadcrumb_page_by_id_specific2($i)] = '';
        // fetch title
        $breadcrumb_title_specific  = get_theme_mod('breadcrumb_title_'.get_breadcrumb_page_by_id_specific2($i).'');
        $breadcrumb_title_from_page[get_breadcrumb_page_by_id_specific2($i)] .= get_theme_mod('breadcrumb_title_'.get_breadcrumb_page_by_id_specific2($i).'');
      }
      $title_from_customizer = get_the_title();
      if(!is_home() && !is_archive() && !is_single() && !is_404()) {
        $breadcrumb_title_specific = get_theme_mod('breadcrumb_title_'.$select_breadcrumb_page.'');
        $breadcrumb_title = $breadcrumb_title_specific;
        $title_from_customizer = wp_kses_post( $breadcrumb_title_from_page[get_queried_object_id()]);
        $title_from_customizer = $title_from_customizer ? $title_from_customizer : wp_kses_post(get_the_title());
      }
      else if(is_single()) {
        $title_from_customizer = wp_kses_post(get_the_title());
      }
      else {

        $title_from_customizer_blog = get_theme_mod('breadcrumb_title_blog',__( 'Blog', 'cinkes' ));
        $title_from_customizer = __('Blog', 'cinkes');
        $title_from_customizer = $title_from_customizer_blog ? $title_from_customizer_blog : $title_from_customizer;
      }
      if (is_archive() ) {
          $title_from_customizer = get_the_archive_title();
      }

      $_id = get_the_ID();
      $is_breadcrumb = function_exists( 'get_field' ) ? get_field( 'is_it_invisible_breadcrumb', $_id ) : '';
      if( !empty($_GET['s']) ) {
        $is_breadcrumb = null;
      }
      if ( empty( $is_breadcrumb ) && $breadcrumb_show == 1 ) {

      $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image',$_id) : '';
      $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image',$_id) : '';

      // get_theme_mod
      $breadcrumb_bg_color = get_theme_mod( 'breadcrumb_bg_color', 'cinkes' );
      $bg_img_url = get_template_directory_uri() . '/assets/img/page-title/page-title.jpg';
      $breadcrumb_bg_img = get_theme_mod( 'breadcrumb_bg_img' );

       $breadcrumb_padding_top_field = function_exists('get_field') ? get_field('breadcrumb_padding_top') : '240';
       $breadcrumb_padding_bottom_field = function_exists('get_field') ? get_field('breadcrumb_padding_bottom') : '220';

        $breadcrumb_padding_top_customizer = get_theme_mod('breadcrumb_padding_top', 240);
        $breadcrumb_padding_bottom_customizer = get_theme_mod('breadcrumb_padding_bottom', 240);

        if($breadcrumb_padding_top_field) {
          $breadcrumb_padding_top = $breadcrumb_padding_top_field;
        } else {
          $breadcrumb_padding_top = $breadcrumb_padding_top_customizer;
        }

        if($breadcrumb_padding_bottom_field) {
          $breadcrumb_padding_bottom = $breadcrumb_padding_bottom_field;
        } else {
          $breadcrumb_padding_bottom = $breadcrumb_padding_bottom_customizer;
        }
      $breadcrumb_overlay_class = '';
      if ( $hide_bg_img && empty($_GET['s']) ) {
          $breadcrumb_bg_img = '';
      } else {
          $breadcrumb_bg_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $breadcrumb_bg_img;
          $breadcrumb_overlay_class = 'breadcrumb_overlay';
      }

    ?>
        <!-- cinkes_breadcrumb_area-start -->
        <div class="cinkes_breadcrumb_area <?php print esc_attr( $breadcrumb_overlay_class );?> <?php print esc_attr( $breadcrumb_class );?>" data-bg-color="<?php print esc_attr($breadcrumb_bg_color); ?>" data-background="<?php print esc_attr($breadcrumb_bg_img);?>" data-top-space="<?php print esc_attr($breadcrumb_padding_top); ?>px" data-bottom-space="<?php print esc_attr($breadcrumb_padding_bottom); ?>px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cinkes_breadcrumb_content">
                            <h4 class="cinkes_breadcrumb_title"><?php echo $title_from_customizer; ?></h4>
                            <nav class="breadcrumb-trail breadcrumbs">
                              <?php 
                               if(function_exists('bcn_display')) {
                                  bcn_display();
                               } ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cinkes_breadcrumb_area-end -->
        <?php
      }
}

add_action( 'cinkes_before_main_content', 'cinkes_breadcrumb_func' );

// cinkes_search_form
function cinkes_search_form() {
    ?>
      <!-- modal-search-start -->
      <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
         </button>
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <form method="get" action="<?php print esc_url( home_url( '/' ) );?>" >
                     <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Enter Your Keyword', 'cinkes' );?>">
                     <button>
                        <i class="fa fa-search"></i>
                     </button>
               </form>
            </div>
         </div>
      </div>
      <!-- modal-search-end -->
   <?php
}

add_action( 'cinkes_before_main_content', 'cinkes_search_form' );


/**
 *
 * pagination
 */
if ( !function_exists( 'cinkes_pagination' ) ) {

    function _cinkes_pagi_callback( $pagination ) {
        return $pagination;
    }

    //page navegation
    function cinkes_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ( $pages == '' ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }

        }

        $pagination = [
            'base'      => add_query_arg( 'paged', '%#%' ),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ( $wp_rewrite->using_permalinks() ) {
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        }

        if ( !empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = ['s' => get_query_var( 's' )];
        }

        $pagi = '';
        if ( paginate_links( $pagination ) != '' ) {
            $paginations = paginate_links( $pagination );
            $pagi .= '<ul>';
            foreach ( $paginations as $key => $pg ) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _cinkes_pagi_callback( $pagi );
    }
}


