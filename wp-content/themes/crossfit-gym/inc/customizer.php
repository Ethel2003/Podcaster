<?php    
/**
 *crossfit-gym Theme Customizer
 *
 * @package CrossFit Gym
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function crossfit_gym_customize_register( $wp_customize ) {	
	
	function crossfit_gym_sanitize_dropdown_pages( $page_id, $setting ) {
	  // Ensure $input is an absolute integer.
	  $page_id = absint( $page_id );	
	  // If $page_id is an ID of a published page, return it; otherwise, return the default.
	  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	function crossfit_gym_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	} 
	
	function crossfit_gym_sanitize_phone_number( $phone ) {
		// sanitize phone
		return preg_replace( '/[^\d+]/', '', $phone );
	} 
	
	
	function crossfit_gym_sanitize_excerptrange( $number, $setting ) {	
		// Ensure input is an absolute integer.
		$number = absint( $number );	
		// Get the input attributes associated with the setting.
		$atts = $setting->manager->get_control( $setting->id )->input_attrs;	
		// Get minimum number in the range.
		$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );	
		// Get maximum number in the range.
		$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );	
		// Get step.
		$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );	
		// If the number is within the valid range, return it; otherwise, return the default
		return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
	}

	function crossfit_gym_sanitize_number_absint( $number, $setting ) {
		// Ensure $number is an absolute integer (whole number, zero or greater).
		$number = absint( $number );		
		// If the input is an absolute integer, return it; otherwise, return the default
		return ( $number ? $number : $setting->default );
	}
	
	// Ensure is an absolute integer
	function crossfit_gym_sanitize_choices( $input, $setting ) {
		global $wp_customize; 
		$control = $wp_customize->get_control( $setting->id ); 
		if ( array_key_exists( $input, $control->choices ) ) {
			return $input;
		} else {
			return $setting->default;
		}
	}
	
		
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo h1 a',
		'render_callback' => 'crossfit_gym_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.logo p',
		'render_callback' => 'crossfit_gym_customize_partial_blogdescription',
	) );
		
	 	
	 //Panel for section & control
	$wp_customize->add_panel( 'crossfit_gym_themeoptions_panel', array(
		'priority' => 4,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'CrossFit Gym Settings', 'crossfit-gym' ),		
	) );

	$wp_customize->add_section('crossfit_gym_siteboxlayout_settings',array(
		'title' => __('Site Layout Options','crossfit-gym'),			
		'priority' => 1,
		'panel' => 	'crossfit_gym_themeoptions_panel',          
	));		
	
	$wp_customize->add_setting('crossfit_gym_layouttype',array(
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'crossfit_gym_layouttype', array(
    	'section'   => 'crossfit_gym_siteboxlayout_settings',    	 
		'label' => __('Check to Show Box Layout','crossfit-gym'),
		'description' => __('check for box layout','crossfit-gym'),
    	'type'      => 'checkbox'
     )); //Box Layout Options 
	
	$wp_customize->add_setting('crossfit_gym_oneclick_colorcode',array(
		'default' => '#f5c404',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'crossfit_gym_oneclick_colorcode',array(
			'label' => __('OneClick Color Settings','crossfit-gym'),			
			'section' => 'colors',
			'settings' => 'crossfit_gym_oneclick_colorcode'
		))
	);
	
	$wp_customize->add_setting('crossfit_gym_menucolor',array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'crossfit_gym_menucolor',array(
			'label' => __('Navigation font Color','crossfit-gym'),			
			'section' => 'colors',
			'settings' => 'crossfit_gym_menucolor'
		))
	);
	
	
	$wp_customize->add_setting('crossfit_gym_menuactive',array(
		'default' => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'crossfit_gym_menuactive',array(
			'label' => __('Navigation Hover/Active Color','crossfit-gym'),			
			'section' => 'colors',
			'settings' => 'crossfit_gym_menuactive'
		))
	);
	
	 //Header info Bar
	$wp_customize->add_section('crossfit_gym_contactdetails_settings',array(
		'title' => __('Header Contact Details','crossfit-gym'),				
		'priority' => null,
		'panel' => 	'crossfit_gym_themeoptions_panel',
	));		
	
	$wp_customize->add_setting('crossfit_gym_emailtext',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('crossfit_gym_emailtext',array(	
		'type' => 'text',
		'label' => __('write email text here','crossfit-gym'),
		'section' => 'crossfit_gym_contactdetails_settings',
		'setting' => 'crossfit_gym_emailtext'
	)); //write email text here		
	
	
	$wp_customize->add_setting('crossfit_gym_emailid',array(
		'sanitize_callback' => 'sanitize_email'
	));
	
	$wp_customize->add_control('crossfit_gym_emailid',array(
		'type' => 'email',
		'label' => __('enter email id here.','crossfit-gym'),
		'section' => 'crossfit_gym_contactdetails_settings'
	));	
	
	$wp_customize->add_setting('crossfit_gym_callustext',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('crossfit_gym_callustext',array(	
		'type' => 'text',
		'label' => __('write call us text here','crossfit-gym'),
		'section' => 'crossfit_gym_contactdetails_settings',
		'setting' => 'crossfit_gym_callustext'
	)); //write email text here		
	
	
	$wp_customize->add_setting('crossfit_gym_phonenumber',array(
		'default' => null,
		'sanitize_callback' => 'crossfit_gym_sanitize_phone_number'	
	));
	
	$wp_customize->add_control('crossfit_gym_phonenumber',array(	
		'type' => 'text',
		'label' => __('Enter phone number here','crossfit-gym'),
		'section' => 'crossfit_gym_contactdetails_settings',
		'setting' => 'crossfit_gym_phonenumber'
	));	
		
	
	$wp_customize->add_setting('crossfit_gym_show_contactdetails_settings',array(
		'default' => false,
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'crossfit_gym_show_contactdetails_settings', array(
	   'settings' => 'crossfit_gym_show_contactdetails_settings',
	   'section'   => 'crossfit_gym_contactdetails_settings',
	   'label'     => __('Check To show This Section','crossfit-gym'),
	   'type'      => 'checkbox'
	 ));//Show Contact Details
	
	 	
	//Slider Section		
	$wp_customize->add_section( 'crossfit_gym_slider_settings', array(
		'title' => __('Slider Settings', 'crossfit-gym'),
		'priority' => null,
		'description' => __('Default image size for slider is 1400 x 800 pixel.','crossfit-gym'), 
		'panel' => 	'crossfit_gym_themeoptions_panel',           			
    ));
	
	$wp_customize->add_setting('crossfit_gym_headerslide1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crossfit_gym_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('crossfit_gym_headerslide1',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide 1:','crossfit-gym'),
		'section' => 'crossfit_gym_slider_settings'
	));	
	
	$wp_customize->add_setting('crossfit_gym_headerslide2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crossfit_gym_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('crossfit_gym_headerslide2',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide 2:','crossfit-gym'),
		'section' => 'crossfit_gym_slider_settings'
	));	
	
	$wp_customize->add_setting('crossfit_gym_headerslide3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crossfit_gym_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('crossfit_gym_headerslide3',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide 3:','crossfit-gym'),
		'section' => 'crossfit_gym_slider_settings'
	));	// Homepage Slider Section	
	
	//Slider Excerpt Length
	$wp_customize->add_setting( 'crossfit_gym_excerpt_length_forslides', array(
		'default'              => 15,
		'type'                 => 'theme_mod',		
		'sanitize_callback'    => 'crossfit_gym_sanitize_excerptrange',		
	) );
	$wp_customize->add_control( 'crossfit_gym_excerpt_length_forslides', array(
		'label'       => __( 'Slider Description length','crossfit-gym' ),
		'section'     => 'crossfit_gym_slider_settings',
		'type'        => 'range',
		'settings'    => 'crossfit_gym_excerpt_length_forslides','input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );	
	
	$wp_customize->add_setting('crossfit_gym_headerslide_btntext',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('crossfit_gym_headerslide_btntext',array(	
		'type' => 'text',
		'label' => __('enter button name here','crossfit-gym'),
		'section' => 'crossfit_gym_slider_settings',
		'setting' => 'crossfit_gym_headerslide_btntext'
	)); // slider read more button text
	
	$wp_customize->add_setting('crossfit_gym_show_slider_settings',array(
		'default' => false,
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'crossfit_gym_show_slider_settings', array(
	    'settings' => 'crossfit_gym_show_slider_settings',
	    'section'   => 'crossfit_gym_slider_settings',
	    'label'     => __('Check To Show This Section','crossfit-gym'),
	   'type'      => 'checkbox'
	 ));//Show Slider Settings	
	 
	 
	//Abous US section
	$wp_customize->add_section('crossfit_gym_aboutsection_settings', array(
		'title' => __('About Us Section','crossfit-gym'),
		'description' => __('Select Pages from the dropdown for about us section','crossfit-gym'),
		'priority' => null,
		'panel' => 	'crossfit_gym_themeoptions_panel',          
	));	
	
	$wp_customize->add_setting('crossfit_gym_aboutsubtitle',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('crossfit_gym_aboutsubtitle',array(	
		'type' => 'text',
		'label' => __('write about us sub title here','crossfit-gym'),
		'section' => 'crossfit_gym_aboutsection_settings',
		'setting' => 'crossfit_gym_aboutsubtitle'
	)); //write about sub title here	
	
	$wp_customize->add_setting('crossfit_gym_aboutpage',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crossfit_gym_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'crossfit_gym_aboutpage',array(
		'type' => 'dropdown-pages',			
		'section' => 'crossfit_gym_aboutsection_settings',
	));	
	
	
	$wp_customize->add_setting('crossfit_gym_aboutquote',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('crossfit_gym_aboutquote',array(	
		'type' => 'text',
		'label' => __('write about quote text here','crossfit-gym'),
		'section' => 'crossfit_gym_aboutsection_settings',
		'setting' => 'crossfit_gym_aboutquote'
	)); //write about quote here	
	
	
	//About us Excerpt Length
	$wp_customize->add_setting( 'crossfit_gym_aboutus_excerptlength', array(
		'default'              => 40,
		'type'                 => 'theme_mod',		
		'sanitize_callback'    => 'crossfit_gym_sanitize_excerptrange',		
	) );
	$wp_customize->add_control( 'crossfit_gym_aboutus_excerptlength', array(
		'label'       => __( 'About us excerpt length','crossfit-gym' ),
		'section'     => 'crossfit_gym_aboutsection_settings',
		'type'        => 'range',
		'settings'    => 'crossfit_gym_aboutus_excerptlength','input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );	
	
	
	$wp_customize->add_setting('crossfit_gym_show_aboutus_section',array(
		'default' => false,
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'crossfit_gym_show_aboutus_section', array(
	    'settings' => 'crossfit_gym_show_aboutus_section',
	    'section'   => 'crossfit_gym_aboutsection_settings',
	    'label'     => __('Check To Show This Section','crossfit-gym'),
	    'type'      => 'checkbox'
	));//Show About Us sections
	
	
	//Video section
	$wp_customize->add_section('crossfit_gym_video_section', array(
		'title' => __('Video Section','crossfit-gym'),
		'description' => __('Select Pages from the dropdown for video section','crossfit-gym'),
		'priority' => null,
		'panel' => 	'crossfit_gym_themeoptions_panel',          
	));		
		
	
	$wp_customize->add_setting('crossfit_gym_videopage',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crossfit_gym_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'crossfit_gym_videopage',array(
		'type' => 'dropdown-pages',			
		'section' => 'crossfit_gym_video_section',
	));	
	
	
	//video section Excerpt Length
	$wp_customize->add_setting( 'crossfit_gym_videopage_excerptlength', array(
		'default'              => 40,
		'type'                 => 'theme_mod',		
		'sanitize_callback'    => 'crossfit_gym_sanitize_excerptrange',		
	) );
	$wp_customize->add_control( 'crossfit_gym_videopage_excerptlength', array(
		'label'       => __( 'welcome video text description length','crossfit-gym' ),
		'section'     => 'crossfit_gym_video_section',
		'type'        => 'range',
		'settings'    => 'crossfit_gym_videopage_excerptlength','input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );
	
	
	$wp_customize->add_setting('crossfit_gym_youtubeid',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('crossfit_gym_youtubeid',array(	
		'type' => 'text',
		'label' => __('Enter here YouTube ID exa. 5Th5tggtz6k','crossfit-gym'),
		'section' => 'crossfit_gym_video_section',
		'setting' => 'crossfit_gym_youtubeid'
	)); //enter here YouTube ID
	
	
	$wp_customize->add_setting('crossfit_gym_show_video_section',array(
		'default' => false,
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'crossfit_gym_show_video_section', array(
	    'settings' => 'crossfit_gym_show_video_section',
	    'section'   => 'crossfit_gym_video_section',
	    'label'     => __('Check To Show This Section','crossfit-gym'),
	    'type'      => 'checkbox'
	));//Show Video sections
	 
	 
	 
	 //Four page Section
	$wp_customize->add_section('crossfit_gym_4columns_sections', array(
		'title' => __('Four Column Section','crossfit-gym'),
		'description' => __('Select pages from the dropdown for four column section','crossfit-gym'),
		'priority' => null,
		'panel' => 	'crossfit_gym_themeoptions_panel',          
	));	
	
	
	$wp_customize->add_setting('crossfit_gym_sectiontitle',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('crossfit_gym_sectiontitle',array(	
		'type' => 'text',
		'label' => __('write services title here','crossfit-gym'),
		'section' => 'crossfit_gym_4columns_sections',
		'setting' => 'crossfit_gym_sectiontitle'
	)); //write four cloumn title here	
	
	
	$wp_customize->add_setting('crossfit_gym_4columnsubtitle',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('crossfit_gym_4columnsubtitle',array(	
		'type' => 'text',
		'label' => __('write services sub title here','crossfit-gym'),
		'section' => 'crossfit_gym_4columns_sections',
		'setting' => 'crossfit_gym_4columnsubtitle'
	)); //write four cloumn sub title here	
	
		
	$wp_customize->add_setting('crossfit_gym_4columnpage1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crossfit_gym_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'crossfit_gym_4columnpage1',array(
		'type' => 'dropdown-pages',			
		'section' => 'crossfit_gym_4columns_sections',
	));		
	
	$wp_customize->add_setting('crossfit_gym_4columnpage2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crossfit_gym_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'crossfit_gym_4columnpage2',array(
		'type' => 'dropdown-pages',			
		'section' => 'crossfit_gym_4columns_sections',
	));
	
	$wp_customize->add_setting('crossfit_gym_4columnpage3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crossfit_gym_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'crossfit_gym_4columnpage3',array(
		'type' => 'dropdown-pages',			
		'section' => 'crossfit_gym_4columns_sections',
	));	
	
	$wp_customize->add_setting('crossfit_gym_4columnpage4',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crossfit_gym_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'crossfit_gym_4columnpage4',array(
		'type' => 'dropdown-pages',			
		'section' => 'crossfit_gym_4columns_sections',
	));	

	$wp_customize->add_setting( 'crossfit_gym_4column_excerptlength', array(
		'default'              => 0,
		'type'                 => 'theme_mod',		
		'sanitize_callback'    => 'crossfit_gym_sanitize_excerptrange',		
	) );
	$wp_customize->add_control( 'crossfit_gym_4column_excerptlength', array(
		'label'       => __( 'four page box excerpt length','crossfit-gym' ),
		'section'     => 'crossfit_gym_4columns_sections',
		'type'        => 'range',
		'settings'    => 'crossfit_gym_4column_excerptlength','input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );	
	
	$wp_customize->add_setting('crossfit_gym_4column_readmorebutton',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('crossfit_gym_4column_readmorebutton',array(	
		'type' => 'text',
		'label' => __('Read more button name here','crossfit-gym'),
		'section' => 'crossfit_gym_4columns_sections',
		'setting' => 'crossfit_gym_4column_readmorebutton'
	)); //four box read more button text
	
	
	$wp_customize->add_setting('crossfit_gym_show_4columns_sections',array(
		'default' => false,
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));		
	
	$wp_customize->add_control( 'crossfit_gym_show_4columns_sections', array(
	   'settings' => 'crossfit_gym_show_4columns_sections',
	   'section'   => 'crossfit_gym_4columns_sections',
	   'label'     => __('Check To Show This Section','crossfit-gym'),
	   'type'      => 'checkbox'
	 ));//Show four column services sections
	 
	 
	 //Social icons Section
	$wp_customize->add_section('crossfit_gym_footersocial_settings',array(
		'title' => __('Footer Social icons','crossfit-gym'),
		'description' => __( 'Add social icons link here to display icons in footer ', 'crossfit-gym' ),			
		'priority' => null,
		'panel' => 	'crossfit_gym_themeoptions_panel', 
	));
	
	$wp_customize->add_setting('crossfit_gym_footfb_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'	
	));
	
	$wp_customize->add_control('crossfit_gym_footfb_link',array(
		'label' => __('Add facebook link here','crossfit-gym'),
		'section' => 'crossfit_gym_footersocial_settings',
		'setting' => 'crossfit_gym_footfb_link'
	));	
	
	$wp_customize->add_setting('crossfit_gym_foottw_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('crossfit_gym_foottw_link',array(
		'label' => __('Add twitter link here','crossfit-gym'),
		'section' => 'crossfit_gym_footersocial_settings',
		'setting' => 'crossfit_gym_foottw_link'
	));

	
	$wp_customize->add_setting('crossfit_gym_footin_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('crossfit_gym_footin_link',array(
		'label' => __('Add linkedin link here','crossfit-gym'),
		'section' => 'crossfit_gym_footersocial_settings',
		'setting' => 'crossfit_gym_footin_link'
	));
	
	$wp_customize->add_setting('crossfit_gym_footigram_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('crossfit_gym_footigram_link',array(
		'label' => __('Add instagram link here','crossfit-gym'),
		'section' => 'crossfit_gym_footersocial_settings',
		'setting' => 'crossfit_gym_footigram_link'
	));
	
	$wp_customize->add_setting('crossfit_gym_show_footersocial_settings',array(
		'default' => false,
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'crossfit_gym_show_footersocial_settings', array(
	   'settings' => 'crossfit_gym_show_footersocial_settings',
	   'section'   => 'crossfit_gym_footersocial_settings',
	   'label'     => __('Check To show This Section','crossfit-gym'),
	   'type'      => 'checkbox'
	 ));//Show Footer Social settings
	 
	 
	 //Blog Posts Settings
	$wp_customize->add_panel( 'crossfit_gym_blogsettings_panel', array(
		'priority' => 3,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Blog Posts Settings', 'crossfit-gym' ),		
	) );
	
	$wp_customize->add_section('crossfit_gym_blogmeta_options',array(
		'title' => __('Blog Meta Options','crossfit-gym'),			
		'priority' => null,
		'panel' => 	'crossfit_gym_blogsettings_panel', 	         
	));		
	
	$wp_customize->add_setting('crossfit_gym_hide_blogdate',array(
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'crossfit_gym_hide_blogdate', array(
    	'label' => __('Check to hide post date','crossfit-gym'),	
		'section'   => 'crossfit_gym_blogmeta_options', 
		'setting' => 'crossfit_gym_hide_blogdate',		
    	'type'      => 'checkbox'
     )); //Blog Date
	 
	 
	 $wp_customize->add_setting('crossfit_gym_hide_postcats',array(
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'crossfit_gym_hide_postcats', array(
		'label' => __('Check to hide post category','crossfit-gym'),	
    	'section'   => 'crossfit_gym_blogmeta_options',		
		'setting' => 'crossfit_gym_hide_postcats',		
    	'type'      => 'checkbox'
     )); //blogposts category	 
	 
	 
	 $wp_customize->add_section('crossfit_gym_postfeatured_image',array(
		'title' => __('Posts Featured image','crossfit-gym'),			
		'priority' => null,
		'panel' => 	'crossfit_gym_blogsettings_panel', 	         
	));		
	
	$wp_customize->add_setting('crossfit_gym_hide_postfeatured_image',array(
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'crossfit_gym_hide_postfeatured_image', array(
		'label' => __('Check to hide post featured image','crossfit-gym'),
    	'section'   => 'crossfit_gym_postfeatured_image',		
		'setting' => 'crossfit_gym_hide_postfeatured_image',	
    	'type'      => 'checkbox'
     )); //Posts featured image
	 
	 
	 $wp_customize->add_setting('crossfit_gym_postimg_left30',array(
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'crossfit_gym_postimg_left30', array(
		'label' => __('Check to featured image Left Align','crossfit-gym'),
    	'section'   => 'crossfit_gym_postfeatured_image',		
		'setting' => 'crossfit_gym_postimg_left30',	
    	'type'      => 'checkbox'
     )); //posts featured images30
	 
	  
	 $wp_customize->add_section('crossfit_gym_postmorebtn',array(
		'title' => __('Posts Read More Button','crossfit-gym'),			
		'priority' => null,
		'panel' => 	'crossfit_gym_blogsettings_panel', 	         
	 ));	
	 
	 $wp_customize->add_setting('crossfit_gym_postmorebuttontext',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	)); //blog read more button text
	
	$wp_customize->add_control('crossfit_gym_postmorebuttontext',array(	
		'type' => 'text',
		'label' => __('Read more button text for blog posts','crossfit-gym'),
		'section' => 'crossfit_gym_postmorebtn',
		'setting' => 'crossfit_gym_postmorebuttontext'
	)); //Post read more button text	
	
	$wp_customize->add_section('crossfit_gym_postcontent_settings',array(
		'title' => __('Posts Excerpt Options','crossfit-gym'),			
		'priority' => null,
		'panel' => 	'crossfit_gym_blogsettings_panel', 	         
	 ));	 
	 
	$wp_customize->add_setting( 'crossfit_gym_postexcerptrange', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'crossfit_gym_sanitize_excerptrange',		
	) );
	
	$wp_customize->add_control( 'crossfit_gym_postexcerptrange', array(
		'label'       => __( 'Excerpt length','crossfit-gym' ),
		'section'     => 'crossfit_gym_postcontent_settings',
		'type'        => 'range',
		'settings'    => 'crossfit_gym_postexcerptrange','input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

    $wp_customize->add_setting('crossfit_gym_postsfullcontent_options',array(
        'default' => 'Excerpt',     
        'sanitize_callback' => 'crossfit_gym_sanitize_choices'
	));
	
	$wp_customize->add_control('crossfit_gym_postsfullcontent_options',array(
        'type' => 'select',
        'label' => __('Posts Content','crossfit-gym'),
        'section' => 'crossfit_gym_postcontent_settings',
        'choices' => array(
        	'Content' => __('Content','crossfit-gym'),
            'Excerpt' => __('Excerpt','crossfit-gym'),
            'No Content' => __('No Excerpt','crossfit-gym')
        ),
	) ); 
	
	
	$wp_customize->add_section('crossfit_gym_postsinglemeta',array(
		'title' => __('Posts Single Settings','crossfit-gym'),			
		'priority' => null,
		'panel' => 	'crossfit_gym_blogsettings_panel', 	         
	));	
	
	$wp_customize->add_setting('crossfit_gym_hide_postdate_fromsingle',array(
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'crossfit_gym_hide_postdate_fromsingle', array(
    	'label' => __('Check to hide post date from single','crossfit-gym'),	
		'section'   => 'crossfit_gym_postsinglemeta', 
		'setting' => 'crossfit_gym_hide_postdate_fromsingle',		
    	'type'      => 'checkbox'
     )); //Hide Posts date from single
	 
	 
	 $wp_customize->add_setting('crossfit_gym_hide_postcats_fromsingle',array(
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'crossfit_gym_hide_postcats_fromsingle', array(
		'label' => __('Check to hide post category from single','crossfit-gym'),	
    	'section'   => 'crossfit_gym_postsinglemeta',		
		'setting' => 'crossfit_gym_hide_postcats_fromsingle',		
    	'type'      => 'checkbox'
     )); //Hide blogposts category single
	 
	 
	 //Sidebar Settings
	$wp_customize->add_section('crossfit_gym_sidebarsettings', array(
		'title' => __('Sidebar Settings','crossfit-gym'),		
		'priority' => null,
		'panel' => 	'crossfit_gym_blogsettings_panel',          
	));		
	 
	$wp_customize->add_setting('crossfit_gym_hidesidebar_blogposts',array(
		'default' => false,
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'crossfit_gym_hidesidebar_blogposts', array(
	   'settings' => 'crossfit_gym_hidesidebar_blogposts',
	   'section'   => 'crossfit_gym_sidebarsettings',
	   'label'     => __('Check to hide sidebar from homepage','crossfit-gym'),
	   'type'      => 'checkbox'
	 ));//hide sidebar blog posts 
	
		 
	 $wp_customize->add_setting('crossfit_gym_hidesidebar_singleposts',array(
		'default' => false,
		'sanitize_callback' => 'crossfit_gym_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'crossfit_gym_hidesidebar_singleposts', array(
	   'settings' => 'crossfit_gym_hidesidebar_singleposts',
	   'section'   => 'crossfit_gym_sidebarsettings',
	   'label'     => __('Check to hide sidebar from single post','crossfit-gym'),
	   'type'      => 'checkbox'
	 ));// Hide sidebar single post	 
		 
}
add_action( 'customize_register', 'crossfit_gym_customize_register' );

function crossfit_gym_custom_css(){ 
?>
	<style type="text/css"> 					
        a,
        #sidebar ul li a:hover,
		#sidebar ol li a:hover,							
        .Bpostsbxstyle h3 a:hover,		
        .postmeta a:hover,
		h4.sub_title,			 			
        .button:hover,
		.sr-column-25:hover h4 a,		
		h2.services_title span,			
		.blog_postmeta a:hover,
		.blog_postmeta a:focus,
		.site-footer ul li a:hover, 
		.site-footer ul li.current_page_item a,
		.videobox .playbtn:after,
		blockquote::before	
            { color:<?php echo esc_html( get_theme_mod('crossfit_gym_oneclick_colorcode','#f5c404')); ?>;}					 
            
        .pagination ul li .current, .pagination ul li a:hover, 
        #commentform input#submit:hover,		
        .nivo-controlNav a.active,
		.sd-search input, .sd-top-bar-nav .sd-search input,			
		a.blogreadmore,
		.hdr-logo-menu,
		.site-hdrmenu .menu ul,
		a.servicesemore,
		.nivo-caption .slidermorebtn:hover,
		.learnmore:hover,		
		.copyrigh-wrapper:before,										
        #sidebar .search-form input.search-submit,				
        .wpcf7 input[type='submit'],				
        nav.pagination .page-numbers.current,		
		.morebutton,	
		.nivo-directionNav a:hover,	
        .toggle a,		
		.footericons a:hover,
		.sr-column-25:hover a.morebtnstyle2:after			
            { background-color:<?php echo esc_html( get_theme_mod('crossfit_gym_oneclick_colorcode','#f5c404')); ?>;}
			
		
		.tagcloud a:hover,
		.video_description,
		blockquote
            { border-color:<?php echo esc_html( get_theme_mod('crossfit_gym_oneclick_colorcode','#f5c404')); ?>;}			
			
		#SiteWrapper a:focus,
		button:focus,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="range"]:focus,
		input[type="date"]:focus,
		input[type="search"]:focus,
		input[type="number"]:focus,
		input[type="tel"]:focus,
		input[type="button"]:focus,
		input[type="month"]:focus,
		input[type="password"]:focus,
		input[type="datetime"]:focus,
		input[type="week"]:focus,
		input[type="submit"]:focus,
		input[type="datetime-local"]:focus,
		input[type="time"]:focus,
		input[type="url"]:focus,
		input[type="reset"]:focus,
		input[type="color"]:focus,
		textarea:focus
            { outline:thin dotted <?php echo esc_html( get_theme_mod('crossfit_gym_oneclick_colorcode','#f5c404')); ?>;}	
			
		
		.site-hdrmenu a,
		.site-hdrmenu ul li.current_page_parent ul.sub-menu li a,
		.site-hdrmenu ul li.current_page_parent ul.sub-menu li.current_page_item ul.sub-menu li a,
		.site-hdrmenu ul li.current-menu-ancestor ul.sub-menu li.current-menu-item ul.sub-menu li a  			
            { color:<?php echo esc_html( get_theme_mod('crossfit_gym_menucolor','#ffffff')); ?>;}	
			
		
		.site-hdrmenu .menu a:hover,
		.site-hdrmenu .menu a:focus,
		.site-hdrmenu .menu ul a:hover,
		.site-hdrmenu .menu ul a:focus,
		.site-hdrmenu ul li a:hover, 
		.site-hdrmenu ul li.current-menu-item a,			
		.site-hdrmenu ul li.current_page_parent ul.sub-menu li.current-menu-item a,
		.site-hdrmenu ul li.current_page_parent ul.sub-menu li a:hover,
		.site-hdrmenu ul li.current-menu-item ul.sub-menu li a:hover,
		.site-hdrmenu ul li.current-menu-ancestor ul.sub-menu li.current-menu-item ul.sub-menu li a:hover 	 			
            { color:<?php echo esc_html( get_theme_mod('crossfit_gym_menuactive','#000000')); ?>;}					
							
	
    </style> 
<?php                                                                                                                                                       
}
         
add_action('wp_head','crossfit_gym_custom_css');	 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function crossfit_gym_customize_preview_js() {
	wp_enqueue_script( 'crossfit_gym_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '19062019', true );
}
add_action( 'customize_preview_init', 'crossfit_gym_customize_preview_js' );