<?php 
/*************************************************
## Cinkes Typography
*************************************************/
function cinkes_customizer_styling() { ?>
<style type="text/css">

/* Header_1 Top Style */
<?php if (get_theme_mod( 'cinkes_header_top_background_color' )) { ?>
.cinkes_header_top_area{
	background-color: <?php echo esc_attr(get_theme_mod( 'cinkes_header_top_background_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header_top_icon_color' )) { ?>
.cinkes_single_contact_step > i {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header_top_icon_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header_top_text_color' )) { ?>
.cinkes_single_contact_step span, .cinkes_header_address_info p, .cinkes_single_contact_step a {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header_top_text_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header_top_text_hover_color' )) { ?>
.cinkes_single_contact_step a:hover {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header_top_text_hover_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header_top_button_text_color' )) { ?>
.cinkes_header_top_button .cinkes_btn {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header_top_button_text_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header_top_button_text_hover_color' )) { ?>
.cinkes_header_top_button .cinkes_btn:hover {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header_top_button_text_hover_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header_top_button_bg_color' )) { ?>
.cinkes_header_top_button .cinkes_btn {
	background-color: <?php echo esc_attr(get_theme_mod( 'cinkes_header_top_button_bg_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header_top_button_bg_hover_color' )) { ?>
.cinkes_header_top_button .cinkes_btn:hover {
	background-color: <?php echo esc_attr(get_theme_mod( 'cinkes_header_top_button_bg_hover_color' ) ); ?>;
}
<?php } ?>


/* Header_1 Logo Style */
<?php if (get_theme_mod( 'header_logo_bg_color' )) { ?>
.cinkes_logo::before, .cinkes_logo_bg_before:before {
	background-color: <?php echo esc_attr(get_theme_mod( 'header_logo_bg_color' ) ); ?>;
}
<?php } ?>

/* Header_1 Menu Style */
<?php if (get_theme_mod( 'header_menu_color' )) { ?>
.cinkes_main_menu li a, .cinkes_main_menu li.has-menu-children:before {
	color: <?php echo esc_attr(get_theme_mod( 'header_menu_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'header_menu_hover_color' )) { ?>
.cinkes_main_menu li:hover > a, .cinkes_main_menu li.has-menu-children:after {
	color: <?php echo esc_attr(get_theme_mod( 'header_menu_hover_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'header_menu_hover_color' )) { ?>
.cinkes_main_menu li ul.sub-menu li a:before {
	background-color: <?php echo esc_attr(get_theme_mod( 'header_menu_hover_color' ) ); ?>;
}
<?php } ?>


/* Header_1 Right Style */
<?php if (get_theme_mod( 'cinkes_header_main_right_icon_color' )) { ?>
.cinkes_quick_icon {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header_main_right_icon_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header_main_right_text_color' )) { ?>
.cinkes_quick_text span {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header_main_right_text_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header_main_right_phone_text_color' )) { ?>
.cinkes_quick_text a {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header_main_right_phone_text_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header_main_right_phone_text_hover_color' )) { ?>
.cinkes_quick_text a:hover {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header_main_right_phone_text_hover_color' ) ); ?>;
}
<?php } ?>

/* Header_2 Style */
<?php if (get_theme_mod( 'header2_menu_color' )) { ?>
.header-transparent .cinkes_menu > ul > li > a, .header-transparent .cinkes_menu li.has-menu-children::before, .header-transparent .cinkes_main_menu li a {
	color: <?php echo esc_attr(get_theme_mod( 'header2_menu_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'header2_menu_hover_color' )) { ?>
.header-transparent .cinkes_main_menu li:hover > a {
	color: <?php echo esc_attr(get_theme_mod( 'header2_menu_hover_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'header2_menu_hover_color' )) { ?>
.cinkes_main_menu li ul.sub-menu {
	border-top-color: <?php echo esc_attr(get_theme_mod( 'header2_menu_hover_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'header2_sticky_menu_color' )) { ?>
.header-transparent.sticky .cinkes_menu > ul > li > a, .header-transparent.sticky .cinkes_menu li.has-menu-children::before, .header-transparent.sticky .cinkes_main_menu li a {
	color: <?php echo esc_attr(get_theme_mod( 'header2_sticky_menu_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'header2_sticky_menu_hover_color' )) { ?>
.header-transparent.sticky .cinkes_main_menu li:hover > a, .header-transparent.sticky .cinkes_menu li.has-menu-children::after {
	color: <?php echo esc_attr(get_theme_mod( 'header2_sticky_menu_hover_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'header2_sticky_menu_hover_color' )) { ?>
.header-transparent.sticky .cinkes_main_menu li ul.sub-menu li a:before {
	background-color: <?php echo esc_attr(get_theme_mod( 'header2_sticky_menu_hover_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'header2_sticky_menu_hover_color' )) { ?>
.header-transparent.sticky .cinkes_main_menu li ul.sub-menu {
	border-top-color: <?php echo esc_attr(get_theme_mod( 'header2_sticky_menu_hover_color' ) ); ?>;
}
<?php } ?>


/* Header_2 Right Style  */
<?php if (get_theme_mod( 'cinkes_header2_right_icon_color' )) { ?>
.header-transparent .cinkes_quick_icon {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header2_right_icon_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header2_right_text_color' )) { ?>
.header-transparent .cinkes_quick_text span {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header2_right_text_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header2_right_phone_text_color' )) { ?>
.header-transparent .cinkes_quick_text a {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header2_right_phone_text_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'cinkes_header2_right_phone_text_hover_color' )) { ?>
.header-transparent .cinkes_quick_text a:hover {
	color: <?php echo esc_attr(get_theme_mod( 'cinkes_header2_right_phone_text_hover_color' ) ); ?>;
}
<?php } ?>

/* Breadcrum Style */
<?php if (get_theme_mod( 'breadcrumb_text_color' )) { ?>
.cinkes_breadcrumb_title, nav.breadcrumb-trail.breadcrumbs span, .breadcrumb-trail.breadcrumbs > span a span, nav.breadcrumb-trail.breadcrumbs {
	color: <?php echo esc_attr(get_theme_mod( 'breadcrumb_text_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'breadcrumb_text_hover_color' )) { ?>
.breadcrumb-trail.breadcrumbs > span a:hover span {
	color: <?php echo esc_attr(get_theme_mod( 'breadcrumb_text_hover_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'breadcrumb_bg_img_ovelay_color' )) { ?>
.breadcrumb_overlay:before {
	background-color: <?php echo esc_attr(get_theme_mod( 'breadcrumb_bg_img_ovelay_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'breadcrumb_bg_img_ovelay_color_opacity' )) { ?>
.breadcrumb_overlay:before {
	opacity: <?php echo esc_attr(get_theme_mod( 'breadcrumb_bg_img_ovelay_color_opacity' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'breadcrumb_background_position_select' )) { ?>
.cinkes_breadcrumb_area {
	background-position: <?php echo esc_attr(get_theme_mod( 'breadcrumb_background_position_select' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'breadcrumb_background_size_select' )) { ?>
.cinkes_breadcrumb_area {
	background-size: <?php echo esc_attr(get_theme_mod( 'breadcrumb_background_size_select' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'breadcrumb_background_blendmode_select' )) { ?>
.cinkes_breadcrumb_area {
	background-blend-mode: <?php echo esc_attr(get_theme_mod( 'breadcrumb_background_blendmode_select' ) ); ?>;
}
<?php } ?>


</style>
<?php }

add_action('wp_head','cinkes_customizer_styling');

?>