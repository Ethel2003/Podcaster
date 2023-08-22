<?php 
	$videography_filmmaker_custom_css ='';

	/*----------------Width Layout -------------------*/
	$videography_filmmaker_theme_lay = get_theme_mod( 'videography_filmmaker_width_options','Full Layout');
    if($videography_filmmaker_theme_lay == 'Full Layout'){
		$videography_filmmaker_custom_css .='body{';
			$videography_filmmaker_custom_css .='max-width: 100%;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_theme_lay == 'Contained Layout'){
		$videography_filmmaker_custom_css .='body{';
			$videography_filmmaker_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_theme_lay == 'Boxed Layout'){
		$videography_filmmaker_custom_css .='body{';
			$videography_filmmaker_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$videography_filmmaker_custom_css .='}';
	}

	/*------ Button Style -------*/
	$videography_filmmaker_top_buttom_padding = get_theme_mod('videography_filmmaker_top_button_padding');
	$videography_filmmaker_left_right_padding = get_theme_mod('videography_filmmaker_left_button_padding');
	if($videography_filmmaker_top_buttom_padding != false || $videography_filmmaker_left_right_padding != false ){
		$videography_filmmaker_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
			$videography_filmmaker_custom_css .='padding-top: '.esc_attr($videography_filmmaker_top_buttom_padding).'px; padding-bottom: '.esc_attr($videography_filmmaker_top_buttom_padding).'px; padding-left: '.esc_attr($videography_filmmaker_left_right_padding).'px; padding-right: '.esc_attr($videography_filmmaker_left_right_padding).'px;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_button_border_radius = get_theme_mod('videography_filmmaker_button_border_radius');
	$videography_filmmaker_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
		$videography_filmmaker_custom_css .='border-radius: '.esc_attr($videography_filmmaker_button_border_radius).'px;';
	$videography_filmmaker_custom_css .='}';

	/*-------------- Woocommerce Button  -------------------*/

	$videography_filmmaker_woocommerce_button_padding_top = get_theme_mod('videography_filmmaker_woocommerce_button_padding_top');
	if($videography_filmmaker_woocommerce_button_padding_top != false){
		$videography_filmmaker_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$videography_filmmaker_custom_css .='padding-top: '.esc_attr($videography_filmmaker_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($videography_filmmaker_woocommerce_button_padding_top).'px;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_woocommerce_button_padding_right = get_theme_mod('videography_filmmaker_woocommerce_button_padding_right');
	if($videography_filmmaker_woocommerce_button_padding_right != false){
		$videography_filmmaker_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$videography_filmmaker_custom_css .='padding-left: '.esc_attr($videography_filmmaker_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($videography_filmmaker_woocommerce_button_padding_right).'px;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_woocommerce_button_border_radius = get_theme_mod('videography_filmmaker_woocommerce_button_border_radius');
	if($videography_filmmaker_woocommerce_button_border_radius != false){
		$videography_filmmaker_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$videography_filmmaker_custom_css .='border-radius: '.esc_attr($videography_filmmaker_woocommerce_button_border_radius).'px;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_related_product = get_theme_mod('videography_filmmaker_related_product',true);

	if($videography_filmmaker_related_product == false){
		$videography_filmmaker_custom_css .='.related.products{';
			$videography_filmmaker_custom_css .='display: none;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_woocommerce_product_border = get_theme_mod('videography_filmmaker_woocommerce_product_border',false);

	if($videography_filmmaker_woocommerce_product_border == true){
		$videography_filmmaker_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$videography_filmmaker_custom_css .='border: 1px solid #ddd;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_woocommerce_product_padding_top = get_theme_mod('videography_filmmaker_woocommerce_product_padding_top',0);
		$videography_filmmaker_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$videography_filmmaker_custom_css .='padding-top: '.esc_attr($videography_filmmaker_woocommerce_product_padding_top).'px; padding-bottom: '.esc_attr($videography_filmmaker_woocommerce_product_padding_top).'px;';
		$videography_filmmaker_custom_css .='}';

	$videography_filmmaker_woocommerce_product_padding_right = get_theme_mod('videography_filmmaker_woocommerce_product_padding_right',0);
		$videography_filmmaker_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$videography_filmmaker_custom_css .='padding-left: '.esc_attr($videography_filmmaker_woocommerce_product_padding_right).'px; padding-right: '.esc_attr($videography_filmmaker_woocommerce_product_padding_right).'px;';
		$videography_filmmaker_custom_css .='}';

	$videography_filmmaker_woocommerce_product_border_radius = get_theme_mod('videography_filmmaker_woocommerce_product_border_radius');
	if($videography_filmmaker_woocommerce_product_border_radius != false){
		$videography_filmmaker_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$videography_filmmaker_custom_css .='border-radius: '.esc_attr($videography_filmmaker_woocommerce_product_border_radius).'px;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_woocommerce_product_box_shadow = get_theme_mod('videography_filmmaker_woocommerce_product_box_shadow');
	if($videography_filmmaker_woocommerce_product_box_shadow != false){
		$videography_filmmaker_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$videography_filmmaker_custom_css .='box-shadow: '.esc_attr($videography_filmmaker_woocommerce_product_box_shadow).'px '.esc_attr($videography_filmmaker_woocommerce_product_box_shadow).'px '.esc_attr($videography_filmmaker_woocommerce_product_box_shadow).'px #aaa;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_product_sale_font_size = get_theme_mod('videography_filmmaker_product_sale_font_size');
	$videography_filmmaker_custom_css .='.woocommerce span.onsale {';
		$videography_filmmaker_custom_css .='font-size: '.esc_attr($videography_filmmaker_product_sale_font_size).'px;';
	$videography_filmmaker_custom_css .='}';

	/*---- Preloader Color ----*/
	$videography_filmmaker_preloader_color = get_theme_mod('videography_filmmaker_preloader_color');
	$videography_filmmaker_preloader_bg_color = get_theme_mod('videography_filmmaker_preloader_bg_color');

	if($videography_filmmaker_preloader_color != false){
		$videography_filmmaker_custom_css .='.preloader-squares .square, .preloader-chasing-squares .square{';
			$videography_filmmaker_custom_css .='background-color: '.esc_attr($videography_filmmaker_preloader_color).';';
		$videography_filmmaker_custom_css .='}';
	}
	if($videography_filmmaker_preloader_bg_color != false){
		$videography_filmmaker_custom_css .='.preloader{';
			$videography_filmmaker_custom_css .='background-color: '.esc_attr($videography_filmmaker_preloader_bg_color).';';
		$videography_filmmaker_custom_css .='}';
	}

	/*-------- Scrollup icon css -------*/
	$videography_filmmaker_scroll_icon_font_size = get_theme_mod('videography_filmmaker_scroll_icon_font_size', 18);
	$videography_filmmaker_custom_css .='.scrollup{';
		$videography_filmmaker_custom_css .='font-size: '.esc_attr($videography_filmmaker_scroll_icon_font_size).'px;';
	$videography_filmmaker_custom_css .='}';

	$videography_filmmaker_scroll_icon_color = get_theme_mod('videography_filmmaker_scroll_icon_color');
	$videography_filmmaker_custom_css .='.scrollup{';
		$videography_filmmaker_custom_css .='color: '.esc_attr($videography_filmmaker_scroll_icon_color).';';
	$videography_filmmaker_custom_css .='}';

	/*---- Copyright css ----*/
	$videography_filmmaker_copyright_fontsize = get_theme_mod('videography_filmmaker_copyright_fontsize',16);
	if($videography_filmmaker_copyright_fontsize != false){
		$videography_filmmaker_custom_css .='#footer p{';
			$videography_filmmaker_custom_css .='font-size: '.esc_attr($videography_filmmaker_copyright_fontsize).'px; ';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_copyright_top_bottom_padding = get_theme_mod('videography_filmmaker_copyright_top_bottom_padding',15);
	if($videography_filmmaker_copyright_top_bottom_padding != false){
		$videography_filmmaker_custom_css .='#footer {';
			$videography_filmmaker_custom_css .='padding-top:'.esc_attr($videography_filmmaker_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($videography_filmmaker_copyright_top_bottom_padding).'px; ';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_resp_sidebar = get_theme_mod( 'videography_filmmaker_sidebar_hide_show',true);
    if($videography_filmmaker_resp_sidebar == true){
    	$videography_filmmaker_custom_css .='@media screen and (max-width:575px) {';
		$videography_filmmaker_custom_css .='#sidebar{';
			$videography_filmmaker_custom_css .='display:block;';
		$videography_filmmaker_custom_css .='} }';
	}else if($videography_filmmaker_resp_sidebar == false){
		$videography_filmmaker_custom_css .='@media screen and (max-width:575px) {';
		$videography_filmmaker_custom_css .='#sidebar{';
			$videography_filmmaker_custom_css .='display:none;';
		$videography_filmmaker_custom_css .='} }';
	}

	/*-------- Copyright css -------*/
	$videography_filmmaker_copyright_color = get_theme_mod('videography_filmmaker_copyright_color');
	$videography_filmmaker_custom_css .='#footer p,#footer p a{';
		$videography_filmmaker_custom_css .='color: '.esc_attr($videography_filmmaker_copyright_color).'!important;';
	$videography_filmmaker_custom_css .='}';

	$videography_filmmaker_copyright__hover_color = get_theme_mod('videography_filmmaker_copyright__hover_color');
	$videography_filmmaker_custom_css .='#footer p:hover,#footer p a:hover{';
		$videography_filmmaker_custom_css .='color: '.esc_attr($videography_filmmaker_copyright__hover_color).'!important;';
	$videography_filmmaker_custom_css .='}';

	/*-------- Copyright background css -------*/
	$videography_filmmaker_copyright_background_color = get_theme_mod('videography_filmmaker_copyright_background_color');
	$videography_filmmaker_custom_css .='#footer{';
		$videography_filmmaker_custom_css .='background-color: '.esc_attr($videography_filmmaker_copyright_background_color).';';
	$videography_filmmaker_custom_css .='}';

	$videography_filmmaker_copyright_alignment = get_theme_mod( 'videography_filmmaker_copyright_alignment','Center');
    if($videography_filmmaker_copyright_alignment == 'Left'){
		$videography_filmmaker_custom_css .='#footer p{';
			$videography_filmmaker_custom_css .='text-align:start;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_copyright_alignment == 'Center'){
		$videography_filmmaker_custom_css .='#footer p{';
			$videography_filmmaker_custom_css .='text-align:center;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_copyright_alignment == 'Right'){
		$videography_filmmaker_custom_css .='#footer p{';
			$videography_filmmaker_custom_css .='text-align:end;';
		$videography_filmmaker_custom_css .='}';
	}

	/*------- Wocommerce sale css -----*/
	$videography_filmmaker_woocommerce_sale_top_padding = get_theme_mod('videography_filmmaker_woocommerce_sale_top_padding',0);
	$videography_filmmaker_woocommerce_sale_left_padding = get_theme_mod('videography_filmmaker_woocommerce_sale_left_padding',0);
	$videography_filmmaker_custom_css .=' .woocommerce span.onsale{';
		$videography_filmmaker_custom_css .='padding-top: '.esc_attr($videography_filmmaker_woocommerce_sale_top_padding).'px; padding-bottom: '.esc_attr($videography_filmmaker_woocommerce_sale_top_padding).'px; padding-left: '.esc_attr($videography_filmmaker_woocommerce_sale_left_padding).'px; padding-right: '.esc_attr($videography_filmmaker_woocommerce_sale_left_padding).'px;';
	$videography_filmmaker_custom_css .='}';

	$videography_filmmaker_woocommerce_sale_border_radius = get_theme_mod('videography_filmmaker_woocommerce_sale_border_radius', 0);
	$videography_filmmaker_custom_css .=' .woocommerce span.onsale{';
		$videography_filmmaker_custom_css .='border-radius: '.esc_attr($videography_filmmaker_woocommerce_sale_border_radius).'px;';
	$videography_filmmaker_custom_css .='}';

	$videography_filmmaker_sale_position = get_theme_mod( 'videography_filmmaker_sale_position','left');
    if($videography_filmmaker_sale_position == 'left'){
		$videography_filmmaker_custom_css .='.woocommerce ul.products li.product span.onsale{';
			$videography_filmmaker_custom_css .='left: 0; right: auto;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_sale_position == 'right'){
		$videography_filmmaker_custom_css .='.woocommerce ul.products li.product span.onsale{';
			$videography_filmmaker_custom_css .='left: auto; right: 0;';
		$videography_filmmaker_custom_css .='}';
	}

	/*-------- footer background css -------*/
	$videography_filmmaker_footer_background_color = get_theme_mod('videography_filmmaker_footer_background_color');
	$videography_filmmaker_custom_css .='.footertown{';
		$videography_filmmaker_custom_css .='background-color: '.esc_attr($videography_filmmaker_footer_background_color).';';
	$videography_filmmaker_custom_css .='}';

	$videography_filmmaker_footer_background_img = get_theme_mod('videography_filmmaker_footer_background_img');
	if($videography_filmmaker_footer_background_img != false){
		$videography_filmmaker_custom_css .='.footertown{';
			$videography_filmmaker_custom_css .='background: url('.esc_attr($videography_filmmaker_footer_background_img).') no-repeat; background-size: cover; background-attachment: fixed;';
		$videography_filmmaker_custom_css .='}';
	}

	/*---- Comment form ----*/
	$videography_filmmaker_comment_width = get_theme_mod('videography_filmmaker_comment_width', '100');
	$videography_filmmaker_custom_css .='#comments textarea{';
		$videography_filmmaker_custom_css .=' width:'.esc_attr($videography_filmmaker_comment_width).'%;';
	$videography_filmmaker_custom_css .='}';

	$videography_filmmaker_comment_submit_text = get_theme_mod('videography_filmmaker_comment_submit_text', 'Post Comment');
	if($videography_filmmaker_comment_submit_text == ''){
		$videography_filmmaker_custom_css .='#comments p.form-submit {';
			$videography_filmmaker_custom_css .='display: none;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_comment_title = get_theme_mod('videography_filmmaker_comment_title', 'Leave a Reply');
	if($videography_filmmaker_comment_title == ''){
		$videography_filmmaker_custom_css .='#comments h2#reply-title {';
			$videography_filmmaker_custom_css .='display: none;';
		$videography_filmmaker_custom_css .='}';
	}

	// Sticky Header padding
	$videography_filmmaker_sticky_header_padding = get_theme_mod('videography_filmmaker_sticky_header_padding');
	$videography_filmmaker_custom_css .='.fixed-header{';
		$videography_filmmaker_custom_css .=' padding-top:'.esc_attr($videography_filmmaker_sticky_header_padding).'px; padding-bottom:'.esc_attr($videography_filmmaker_sticky_header_padding).'px;';
	$videography_filmmaker_custom_css .='}';

	// Navigation Font Size 
	$videography_filmmaker_nav_font_size = get_theme_mod('videography_filmmaker_nav_font_size');
	if($videography_filmmaker_nav_font_size != false){
		$videography_filmmaker_custom_css .='.primary-navigation ul li a{';
			$videography_filmmaker_custom_css .='font-size: '.esc_attr($videography_filmmaker_nav_font_size).'px;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_navigation_case = get_theme_mod('videography_filmmaker_navigation_case', 'capitalize');
	if($videography_filmmaker_navigation_case == 'uppercase' ){
		$videography_filmmaker_custom_css .='.primary-navigation ul li a{';
			$videography_filmmaker_custom_css .=' text-transform: uppercase;';
		$videography_filmmaker_custom_css .='}';
	}elseif($videography_filmmaker_navigation_case == 'capitalize' ){
		$videography_filmmaker_custom_css .='.primary-navigation ul li a{';
			$videography_filmmaker_custom_css .=' text-transform: capitalize;';
		$videography_filmmaker_custom_css .='}';
	}

    // site title color option
	$videography_filmmaker_site_title_color_setting = get_theme_mod('videography_filmmaker_site_title_color_setting');
	$videography_filmmaker_custom_css .=' .logo h1 a, .logo p a{';
		$videography_filmmaker_custom_css .='color: '.esc_attr($videography_filmmaker_site_title_color_setting).';';
	$videography_filmmaker_custom_css .='} ';

	$videography_filmmaker_tagline_color_setting = get_theme_mod('videography_filmmaker_tagline_color_setting');
	$videography_filmmaker_custom_css .=' .logo p.site-description{';
		$videography_filmmaker_custom_css .='color: '.esc_attr($videography_filmmaker_tagline_color_setting).';';
	$videography_filmmaker_custom_css .='} ';   

	//Site title Font size
	$videography_filmmaker_site_title_fontsize = get_theme_mod('videography_filmmaker_site_title_fontsize');
	$videography_filmmaker_custom_css .='.logo h1, .logo p.site-title{';
		$videography_filmmaker_custom_css .='font-size: '.esc_attr($videography_filmmaker_site_title_fontsize).'px;';
	$videography_filmmaker_custom_css .='}';

	$videography_filmmaker_site_description_fontsize = get_theme_mod('videography_filmmaker_site_description_fontsize');
	$videography_filmmaker_custom_css .='.logo p.site-description{';
		$videography_filmmaker_custom_css .='font-size: '.esc_attr($videography_filmmaker_site_description_fontsize).'px;';
	$videography_filmmaker_custom_css .='}';

	/*----- Featured image css -----*/
	$videography_filmmaker_featured_image_border_radius = get_theme_mod('videography_filmmaker_featured_image_border_radius');
	if($videography_filmmaker_featured_image_border_radius != false){
		$videography_filmmaker_custom_css .='.inner-service .service-image img{';
			$videography_filmmaker_custom_css .='border-radius: '.esc_attr($videography_filmmaker_featured_image_border_radius).'px;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_featured_image_box_shadow = get_theme_mod('videography_filmmaker_featured_image_box_shadow');
	if($videography_filmmaker_featured_image_box_shadow != false){
		$videography_filmmaker_custom_css .='.inner-service .service-image img{';
			$videography_filmmaker_custom_css .='box-shadow: 8px 8px '.esc_attr($videography_filmmaker_featured_image_box_shadow).'px #aaa;';
		$videography_filmmaker_custom_css .='}';
	} 

	/*------Shop page pagination ---------*/
	$videography_filmmaker_shop_page_pagination = get_theme_mod('videography_filmmaker_shop_page_pagination', true);
	if($videography_filmmaker_shop_page_pagination == false){
		$videography_filmmaker_custom_css .= '.woocommerce nav.woocommerce-pagination {';
			$videography_filmmaker_custom_css .='display: none;';
		$videography_filmmaker_custom_css .='}';
	}

	/*------- Post into blocks ------*/
	$videography_filmmaker_post_blocks = get_theme_mod('videography_filmmaker_post_blocks', 'Without box');
	if($videography_filmmaker_post_blocks == 'Within box' ){
		$videography_filmmaker_custom_css .='.services-box{';
			$videography_filmmaker_custom_css .=' border: 1px solid #222;';
		$videography_filmmaker_custom_css .='}';
	}

	//  ------------ Mobile Media Options ----------
	$videography_filmmaker_responsive_sticky_header = get_theme_mod('videography_filmmaker_responsive_sticky_header',false);
	if($videography_filmmaker_responsive_sticky_header == true && get_theme_mod('videography_filmmaker_sticky_header',false) == false){
		$videography_filmmaker_custom_css .='@media screen and (min-width:575px){
			.fixed-header{';
			$videography_filmmaker_custom_css .='position:static !important;';
		$videography_filmmaker_custom_css .='} }';
	}

	if($videography_filmmaker_responsive_sticky_header == false){
		$videography_filmmaker_custom_css .='@media screen and (max-width:575px){
			.fixed-header{';
			$videography_filmmaker_custom_css .='position:static !important;';
		$videography_filmmaker_custom_css .='} }';
	}

	// responsive slider
	if (get_theme_mod('videography_filmmaker_slider_responsive',true) == true && get_theme_mod('videography_filmmaker_slider_hide_show',false) == false) {
		$videography_filmmaker_custom_css .='@media screen and (min-width: 575px){
			#slider{';
			$videography_filmmaker_custom_css .=' display: none;';
		$videography_filmmaker_custom_css .='} }';
	}
	if (get_theme_mod('videography_filmmaker_slider_responsive',true) == false) {
		$videography_filmmaker_custom_css .='@media screen and (max-width: 575px){
			#slider{';
			$videography_filmmaker_custom_css .=' display: none;';
		$videography_filmmaker_custom_css .='} }';
	}

	$videography_filmmaker_responsive_show_back_to_top = get_theme_mod('videography_filmmaker_responsive_show_back_to_top',true);
	if($videography_filmmaker_responsive_show_back_to_top == true && get_theme_mod('videography_filmmaker_show_back_to_top',true) == false){
		$videography_filmmaker_custom_css .='@media screen and (min-width:575px){
			.scrollup{';
			$videography_filmmaker_custom_css .='visibility:hidden;';
		$videography_filmmaker_custom_css .='} }';
	}

	if($videography_filmmaker_responsive_show_back_to_top == false){
		$videography_filmmaker_custom_css .='@media screen and (max-width:575px){
			.scrollup{';
			$videography_filmmaker_custom_css .='visibility:hidden;';
		$videography_filmmaker_custom_css .='} }';
	}

	$videography_filmmaker_responsive_preloader_hide = get_theme_mod('videography_filmmaker_responsive_preloader_hide',false);
	if($videography_filmmaker_responsive_preloader_hide == true && get_theme_mod('videography_filmmaker_preloader_hide',false) == false){
		$videography_filmmaker_custom_css .='@media screen and (min-width:575px){
			.preloader{';
			$videography_filmmaker_custom_css .='display:none !important;';
		$videography_filmmaker_custom_css .='} }';
	}

	if($videography_filmmaker_responsive_preloader_hide == false){
		$videography_filmmaker_custom_css .='@media screen and (max-width:575px){
			.preloader{';
			$videography_filmmaker_custom_css .='display:none !important;';
		$videography_filmmaker_custom_css .='} }';
	}

	// menu font weight
	$videography_filmmaker_theme_lay = get_theme_mod( 'videography_filmmaker_font_weight_menu_option','500');
    if($videography_filmmaker_theme_lay == '100'){
		$videography_filmmaker_custom_css .='.primary-navigation ul li a{';
			$videography_filmmaker_custom_css .='font-weight:100;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_theme_lay == '200'){
		$videography_filmmaker_custom_css .='.primary-navigation ul li a{';
			$videography_filmmaker_custom_css .='font-weight: 200;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_theme_lay == '300'){
		$videography_filmmaker_custom_css .='.primary-navigation ul li a{';
			$videography_filmmaker_custom_css .='font-weight: 300;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_theme_lay == '400'){
		$videography_filmmaker_custom_css .='.primary-navigation ul li a{';
			$videography_filmmaker_custom_css .='font-weight: 400;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_theme_lay == '500'){
		$videography_filmmaker_custom_css .='.primary-navigation ul li a{';
			$videography_filmmaker_custom_css .='font-weight: 500;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_theme_lay == '600'){
		$videography_filmmaker_custom_css .='.primary-navigation ul li a{';
			$videography_filmmaker_custom_css .='font-weight: 600;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_theme_lay == '700'){
		$videography_filmmaker_custom_css .='.primary-navigation ul li a{';
			$videography_filmmaker_custom_css .='font-weight: 700;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_theme_lay == '800'){
		$videography_filmmaker_custom_css .='.primary-navigation ul li a{';
			$videography_filmmaker_custom_css .='font-weight: 800;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_theme_lay == '900'){
		$videography_filmmaker_custom_css .='.primary-navigation ul li a{';
			$videography_filmmaker_custom_css .='font-weight: 900;';
		$videography_filmmaker_custom_css .='}';
	}

	// menu color
	$videography_filmmaker_menu_color = get_theme_mod('videography_filmmaker_menu_color');

	$videography_filmmaker_custom_css .='.primary-navigation a,.primary-navigation .current_page_item > a, .primary-navigation .current-menu-item > a, .primary-navigation .current_page_ancestor > a{';
			$videography_filmmaker_custom_css .='color: '.esc_attr($videography_filmmaker_menu_color).'!important;';
	$videography_filmmaker_custom_css .='}';

	// menu hover color
	$videography_filmmaker_menu_hover_color = get_theme_mod('videography_filmmaker_menu_hover_color');
	$videography_filmmaker_custom_css .='.primary-navigation a:hover{';
			$videography_filmmaker_custom_css .='color: '.esc_attr($videography_filmmaker_menu_hover_color).' !important;';
	$videography_filmmaker_custom_css .='}';

	// Submenu color
	$videography_filmmaker_submenu_menu_color = get_theme_mod('videography_filmmaker_submenu_menu_color');
	$videography_filmmaker_custom_css .='.primary-navigation ul.sub-menu a, .primary-navigation ul.sub-menu li a{';
			$videography_filmmaker_custom_css .='color: '.esc_attr($videography_filmmaker_submenu_menu_color).' !important;';
	$videography_filmmaker_custom_css .='}';

	// Submenu Hover Color Option
	$videography_filmmaker_submenu_hover_color = get_theme_mod('videography_filmmaker_submenu_hover_color');
	$videography_filmmaker_custom_css .='.primary-navigation ul.sub-menu li a:hover {';
	$videography_filmmaker_custom_css .='color: '.esc_attr($videography_filmmaker_submenu_hover_color).'!important;';
	$videography_filmmaker_custom_css .='} ';

	// Breadcrumb color option
	$videography_filmmaker_breadcrumb_color = get_theme_mod('videography_filmmaker_breadcrumb_color');
	$videography_filmmaker_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$videography_filmmaker_custom_css .='color: '.esc_attr($videography_filmmaker_breadcrumb_color).'!important;';
	$videography_filmmaker_custom_css .='}';

	// Breadcrumb bg color option
	$videography_filmmaker_breadcrumb_background_color = get_theme_mod('videography_filmmaker_breadcrumb_background_color');
	$videography_filmmaker_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$videography_filmmaker_custom_css .='background-color: '.esc_attr($videography_filmmaker_breadcrumb_background_color).'!important;';
	$videography_filmmaker_custom_css .='}';

	// Breadcrumb hover color option
	$videography_filmmaker_breadcrumb_hover_color = get_theme_mod('videography_filmmaker_breadcrumb_hover_color');
	$videography_filmmaker_custom_css .='.bradcrumbs a:hover{';
		$videography_filmmaker_custom_css .='color: '.esc_attr($videography_filmmaker_breadcrumb_hover_color).'!important;';
	$videography_filmmaker_custom_css .='}';

	// Breadcrumb hover bg color option
	$videography_filmmaker_breadcrumb_hover_bg_color = get_theme_mod('videography_filmmaker_breadcrumb_hover_bg_color');
	$videography_filmmaker_custom_css .='.bradcrumbs a:hover{';
		$videography_filmmaker_custom_css .='background-color: '.esc_attr($videography_filmmaker_breadcrumb_hover_bg_color).'!important;';
	$videography_filmmaker_custom_css .='}';

	// Category color option
	$videography_filmmaker_category_color = get_theme_mod('videography_filmmaker_category_color');
	$videography_filmmaker_custom_css .='.tc-single-category a{';
		$videography_filmmaker_custom_css .='color: '.esc_attr($videography_filmmaker_category_color).'!important;';
	$videography_filmmaker_custom_css .='}';

	// Category bg color option
	$videography_filmmaker_category_background_color = get_theme_mod('videography_filmmaker_category_background_color');
	$videography_filmmaker_custom_css .='.tc-single-category a{';
		$videography_filmmaker_custom_css .='background-color: '.esc_attr($videography_filmmaker_category_background_color).'!important;';
	$videography_filmmaker_custom_css .='}';

	// Single post image border radious
	$videography_filmmaker_single_post_img_border_radius = get_theme_mod('videography_filmmaker_single_post_img_border_radius', 0);
	$videography_filmmaker_custom_css .='.feature-box img{';
		$videography_filmmaker_custom_css .='border-radius: '.esc_attr($videography_filmmaker_single_post_img_border_radius).'px;';
	$videography_filmmaker_custom_css .='}';

	// slider hide css
	$videography_filmmaker_slider_hide_show = get_theme_mod('videography_filmmaker_slider_hide_show',false);
	if($videography_filmmaker_slider_hide_show == false) {
		$videography_filmmaker_custom_css .='.page-template-custom-frontpage #header{';
			$videography_filmmaker_custom_css .='position:static; border-bottom: 1px solid #e2e2e2;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_slider_background_img = get_theme_mod('videography_filmmaker_slider_background_img', get_template_directory_uri().'/images/slider-bg.png');
	if($videography_filmmaker_slider_background_img != '') {
		$videography_filmmaker_custom_css .='#slider{';
			$videography_filmmaker_custom_css .='background-image: url('.esc_attr($videography_filmmaker_slider_background_img).');';
		$videography_filmmaker_custom_css .='}';
	}

	// Single post image border radious
	$videography_filmmaker_single_post_img_border_radius = get_theme_mod('videography_filmmaker_single_post_img_border_radius', 0);
	$videography_filmmaker_custom_css .='.feature-box img{';
		$videography_filmmaker_custom_css .='border-radius: '.esc_attr($videography_filmmaker_single_post_img_border_radius).'px;';
	$videography_filmmaker_custom_css .='}';

	// Single post image box shadow
	$videography_filmmaker_single_post_img_box_shadow = get_theme_mod('videography_filmmaker_single_post_img_box_shadow',0);
	$videography_filmmaker_custom_css .='.feature-box img{';
		$videography_filmmaker_custom_css .='box-shadow: '.esc_attr($videography_filmmaker_single_post_img_box_shadow).'px '.esc_attr($videography_filmmaker_single_post_img_box_shadow).'px '.esc_attr($videography_filmmaker_single_post_img_box_shadow).'px #ccc;';
	$videography_filmmaker_custom_css .='}';

	// Metabox Seperator
	$videography_filmmaker_metabox_seperator = get_theme_mod('videography_filmmaker_metabox_seperator');
	if($videography_filmmaker_metabox_seperator != '' ){
		$videography_filmmaker_custom_css .='.metabox .me-2:after{';
			$videography_filmmaker_custom_css .=' content: "'.esc_attr($videography_filmmaker_metabox_seperator).'"; padding-left:10px;';
		$videography_filmmaker_custom_css .='}';		
	}

	// Metabox Seperator
	$videography_filmmaker_single_post_metabox_seperator = get_theme_mod('videography_filmmaker_single_post_metabox_seperator');
	if($videography_filmmaker_single_post_metabox_seperator != '' ){
		$videography_filmmaker_custom_css .='.metabox .px-2:after{';
			$videography_filmmaker_custom_css .=' content: "'.esc_attr($videography_filmmaker_single_post_metabox_seperator).'"; padding-left:10px;';
		$videography_filmmaker_custom_css .='}';		
	}

	/*----------- Footer widgets heading alignment -----*/
	$videography_filmmaker_footer_widgets_heading = get_theme_mod( 'videography_filmmaker_footer_widgets_heading','Left');
    if($videography_filmmaker_footer_widgets_heading == 'Left'){
		$videography_filmmaker_custom_css .='footer h3{';
		$videography_filmmaker_custom_css .='text-align: left;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_footer_widgets_heading == 'Center'){
		$videography_filmmaker_custom_css .='footer h3{';
			$videography_filmmaker_custom_css .='text-align: center;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_footer_widgets_heading == 'Right'){
		$videography_filmmaker_custom_css .='footer h3{';
			$videography_filmmaker_custom_css .='text-align: right;';
		$videography_filmmaker_custom_css .='}';
	}

	$videography_filmmaker_footer_widgets_content = get_theme_mod( 'videography_filmmaker_footer_widgets_content','Left');
    if($videography_filmmaker_footer_widgets_content == 'Left'){
		$videography_filmmaker_custom_css .='footer ul,.widget_shopping_cart_content p,footer form,div#calendar_wrap,.footertown table,footer.gallery,aside#media_image-2,.tagcloud,footer figure.gallery-item,aside#block-7,.textwidget p,#calendar-2 caption{';
		$videography_filmmaker_custom_css .='text-align: left;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_footer_widgets_content == 'Center'){
		$videography_filmmaker_custom_css .='footer ul,.widget_shopping_cart_content p,footer form,div#calendar_wrap,.footertown table,footer .gallery, aside#media_image-2,.tagcloud,footer figure.gallery-item,aside#block-7,.textwidget p,#calendar-2 caption{';
			$videography_filmmaker_custom_css .='text-align: center;';
		$videography_filmmaker_custom_css .='}';
	}else if($videography_filmmaker_footer_widgets_content == 'Right'){
		$videography_filmmaker_custom_css .='footer ul,.widget_shopping_cart_content p,footer form,div#calendar_wrap,.footertown table,footer .gallery, aside#media_image-2,.tagcloud,footer figure.gallery-item,aside#block-7,.textwidget p,#calendar-2 caption{';
			$videography_filmmaker_custom_css .='text-align: right !important;';
		$videography_filmmaker_custom_css .='}';
	}