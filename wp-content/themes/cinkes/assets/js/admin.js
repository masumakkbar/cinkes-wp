var bgColorVal = ['.admin-cursor-button-list-1 .admin-cursor-default, .admin-cursor-button-list-1 .admin-cursor-magic, .cinkes_project_media_description_details_share a:hover, .item_img > i, .item_cat, .portfolio_nav button.active,.portfolio_nav button:hover,.sidebar_send_btn,.error-button,.s_details_video, .details_tab_wrapper ul li button:is(.active), .cinkes_counterup_wrapper .row > :nth-child(2) .cinkes_counterup_single::after, .side-admin-demo-select ul.nav li.nav-item button.active, .cinkes_counterup_wrapper .row > :nth-child(3) .cinkes_counterup_single::after, button.side-admin-settings, .cinkes_service_work::before, .cinkes_service_item_2, .cinkes_submit_btn, .contact_btn, .cinkes_blog_content_share a:hover, .cinkes_blog_content_tags a:hover, .cinkes_add_btn, .cinkes_sidebar-cloudtag a:hover, .blog_pagination ul li .current,.cinkes_sidebar-category ul li a:hover, .blog_pagination ul li .page-numbers:hover, .quote_author:before, .video_icon:hover, .blog_btn, .meta_item:not(:last-child):before, .cinkes-single-plus-btn-link-1, .cinkes_testimonial_spage_navigation div, .cinkes_help_feature_single_icon, .cinkes_newsletter_btn, .cinkes_latest_blog_sinlge_meta_comments:before, .cinkes_latest_blog_single_content_date,.cinkes_footer_social a:hover, .video_presentation_btn,.cinkes_free_consultaion_wrapper, .cinkes_counterup_single:before, .cinkes_counterup_single:after, .active .cinkes_pricing_plan_action_btn, .cinkes_pricing_plan_action_btn:hover, .active .pricing_tag, .cinkes_logo::before, .cinkes_team_member_social_action a:hover, .cinkes_fullwidth_services_icon_box:hover, .cinkes_counterup_wrapper .row > :nth-child(1) .cinkes_counterup_single::after, .cinkes_fullwidth_number,.cinkes_logo_bg_before:before, .cinkes_main_menu li ul.sub-menu li a:before, .theme_bg, .slide_btn, .cinkes_services_btn, .theme_clr:before, .cinkes_sub_title:after, .cinkes_services_single:hover .cinkes_services_single_icon', '.cinkes_about_subtitle:before, .cinkes_about_btn, .cinkes_video_btn, .cinkes_working_process_step_icon a:hover i,  .cinkes_projects_button li button::before, .swiper-slide.cinkes_project_slide.swiper-slide-active .cinkes_slide_content a, button.cinkes-side-admin-panel-close-btn, .swiper-slide.cinkes_project_slide.swiper-slide-active .cinkes_slide_content a, .cinkes_projects_navigation div:hover'];
var normalColorVal = ['.team_person_info a:hover, .item_text:hover, .cinkes_project_media_description_details ul li a:hover, .item_img > i:hover, .error-button:hover, .breadcrumbs ul li a:hover, .cinkes-404-title, .cinkes_sidebar_download a:hover, .sidebar_input::before,.sidebar_textarea::before,.header-transparent.sticky .cinkes_quick_text a:hover, .header-transparent:is(.sticky) #nav-expander, .cinkes_service2_item_title a:hover, .cinkes_blog2_meta a:hover, .cinkes_blog2_single_content_title a:hover,.cinkes_quick_text a:hover, .cinkes_service2_item_icon i, .cinkes_support_item i, .cinkes_service_work_icon i, #nav-close:hover, #nav-expander, .site-admin-demo-single a:hover h4, .cinkes_contact_single_icon i, .comment_title a:hover, .comment_btn, .comment_btn i, .cinkes_blog_content_author_social a:hover, .cinkes_sidebar-latestnews-title a:hover, .cinkes_sidebar-search button[type=submit], .blog_meta a:hover, .blog_single_quote_content i, .video_icon i, .meta_item i, .blog_title a:hover, .cinkes-single-recent-project-content-title-1 a:Hover, .blog_user_name:hover, .header-transparent .cinkes_quick_text a:hover, .cinkes_project_details_prev:hover, .cinkes_project_details_next:hover, .cinkes_project_details_meta_icon i, .cinkes_project_details_meta_text a:hover, .cinkes_testimonial_spage_author_rating a, .header-transparent .cinkes_main_menu li:hover > a, .cinkes_team_member_name.cinkes_team_details_name, .cinkes_footer_copyright_area p a, .cinkes_copyright_menu ul li a:hover, .cinkes_footer_contact-single_title, a.cinkes_blog_meta:hover,.cinkes_latest_blog_single_content_title:hover, .cinkes_latest_blog_single_meta_author a, .cinkes_blog_meta i, .cinkes_testimonial_message_navigation div:hover, .cinkes_testimonial_rating a i, .cinkes_testimonial_customer_name, .video_presentation_btn:hover, .cinkes_count_number, .cinkes_pricing_plan_rating a, .cinkes_pricing_plan_price sup, .cinkes_fullwidth_services_icon_box i, .cinkes_team_member_name a:hover, .cinkes_main_menu li.has-menu-children:after, .cinkes_main_menu li:hover > a, .cinkes_services_fullwidth_subtitle, .theme_clr, .cinkes_services_single_icon, .cinkes_services_single_title a:hover, .cinkes_about_subtitle, .cinkes_list1_wrapper ul li > i, .cinkes_working_process_step_title:hover a, .cinkes_working_process_step_icon i, .cinkes_projects_button li button:is(.active)'];
var borderTopColorVal = ['.cinkes_main_menu li ul.sub-menu'];
var borderBottomColorVal = ['.cinkes_sidebar_title::before'];
var borderColorVal = ['.cinkes_project_media_description_details_share a:hover, .item_img > i, .item_img > i:hover, .cinkes_blog_content_tags a:hover, .details_tab_wrapper ul li button:is(.active), .error-button:hover'];


var bgcolor = document.createElement('style');
var normalColor = document.createElement('style'); 
var borderTopColor = document.createElement('style');
var borderBottomColor = document.createElement('style');
var borderColor = document.createElement('style');

colorDomSelect = document.getElementById('admin-color-select');
colorDomSelect.addEventListener('input', function () {
    const color = this.value;
    // save color to local storage
    localStorage.setItem('Pcolor', color);
    bgcolor.innerHTML = `${bgColorVal} { background-color: ${color}}`;
    normalColor.innerHTML = `${normalColorVal} { color: ${color}}`;
    borderTopColor.innerHTML = `${borderTopColorVal} { border-top-color: ${color}}`;
    borderBottomColor.innerHTML = `${borderBottomColorVal} { border-bottom-color: ${color}}`;
    borderColor.innerHTML = `${borderBottomColorVal} { border-bottom-color: ${color}}`;
});

colorFormLocalStorage = localStorage.getItem('Pcolor');
$('.admin-color-btn-reset').on('click', function(e) {
	localStorage.setItem('Pcolor', '#F94D1C');
})
console.log(colorFormLocalStorage);
colorDomSelect.value = colorFormLocalStorage; 
bgcolor.innerHTML = `${bgColorVal} { background-color: ${colorFormLocalStorage}}`;
normalColor.innerHTML = `${normalColorVal} { color: ${colorFormLocalStorage}}`;
borderTopColor.innerHTML = `${borderTopColorVal} { border-top-color: ${colorFormLocalStorage}}`;
borderBottomColor.innerHTML = `${borderBottomColorVal} { border-bottom-color: ${colorFormLocalStorage}}`;
borderColor.innerHTML = `${borderColorVal} { border-color: ${colorFormLocalStorage}}`;



document.body.appendChild(bgcolor);
document.body.appendChild(normalColor);
document.body.appendChild(borderTopColor);
document.body.appendChild(borderBottomColor);
document.body.appendChild(borderColor);


;(function($) {
    $('.side-admin-settings').on('click', function() {
        $('.side-admin-panel-right').addClass('side-admin-panel-visible');
        $('.overlay').addClass('overlay-visible');
    })
    $('.cinkes-side-admin-panel-close-btn, .overlay').on('click', function() {
        $('.side-admin-panel-right').removeClass('side-admin-panel-visible');
        $('.overlay').removeClass('overlay-visible');
    })


})(jQuery)