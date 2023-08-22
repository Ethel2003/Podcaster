<?php
//about theme info
add_action( 'admin_menu', 'videography_filmmaker_gettingstarted' );
function videography_filmmaker_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'videography-filmmaker'), esc_html__('Get Started', 'videography-filmmaker'), 'edit_theme_options', 'videography_filmmaker_guide', 'videography_filmmaker_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function videography_filmmaker_admin_theme_style() {
   wp_enqueue_style('videography-filmmaker-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/getstart.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'videography_filmmaker_admin_theme_style');

//guidline for about theme
function videography_filmmaker_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'videography-filmmaker' );
?>

<div class="wrapper-info">  
    <div class="tab-sec">
		<div class="tab">
			<div class="logo">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/logo.png" alt="" />
			</div>
			<button role="tab" class="tablinks home" onclick="videography_filmmaker_openCity(event, 'tc_index')"><?php esc_html_e( 'Free Theme Information', 'videography-filmmaker' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="videography_filmmaker_openCity(event, 'tc_pro')"><?php esc_html_e( 'Premium Theme Information', 'videography-filmmaker' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="videography_filmmaker_openCity(event, 'tc_create')"><?php esc_html_e( 'Theme Support', 'videography-filmmaker' ); ?></button>				
		</div>

		<div  id="tc_index" class="tabcontent">
			<h2><?php esc_html_e( 'Welcome to Videography Filmmaker Theme', 'videography-filmmaker' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
			<hr>
			<div class="info-link">
				<a href="<?php echo esc_url( VIDEOGRAPHY_FILMMAKER_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'videography-filmmaker' ); ?></a>
				<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'videography-filmmaker'); ?></a>
				<a class="get-pro" href="<?php echo esc_url( VIDEOGRAPHY_FILMMAKER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'videography-filmmaker'); ?></a>
			</div>
			<div class="col-tc-6">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/screenshot.png" alt="" />
			</div>
			<div class="col-tc-6">
				<P><?php esc_html_e( 'Videography Filmmaker is a theme suitable for news portals, podcast portals, videos, video blogs, blogging, magazine, portfolio, websites, videographers, vlogs, or YouTube. The theme has secure, clean, mobile friendly, shortcodes, personalization options, a testimonial section, etc. The theme is also equipped with a variety of theme options. We can make each theme with its own controls with the header builder and footer options. All the options are yours. It means the users can control and customize the theme according to their tastes and choice. It supports WooCommerce, which could be transformed into an online shop. The theme includes multiple interior templates for pages to design, each in a different way. It also has advanced colors and background color choices, making it the perfect choice for any videography website. The advanced slider that comes with different effects allows users to organize their content according to their preferences of the users. It includes a banner, sections, and a well-known plugins contact form 7. The theme has a 100% Mobile-friendly design and is responsive to all devices. This videography filmmaker theme efficiently serves all the requirements for all videography sites.', 'videography-filmmaker' ); ?></P>
			</div>
    	</div>

		<div id="tc_pro" class="tabcontent">
			<h3><?php esc_html_e( 'Videography Filmmaker Theme Information', 'videography-filmmaker' ); ?></h3>
			<hr>
			<div class="pro-image">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/resize.png" alt="" />
			</div>
			<div class="info-link-pro">
				<p><a href="<?php echo esc_url( VIDEOGRAPHY_FILMMAKER_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'videography-filmmaker' ); ?></a></p>
				<p><a href="<?php echo esc_url( VIDEOGRAPHY_FILMMAKER_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'videography-filmmaker' ); ?></a></p>
				<p><a href="<?php echo esc_url( VIDEOGRAPHY_FILMMAKER_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'videography-filmmaker' ); ?></a></p>
			</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'Videography Filmmaker Pro Theme', 'videography-filmmaker' ); ?></h4>
				<P><?php esc_html_e( 'The free videography WordPress theme was designed for blogs, filmmakers’ journals, page builders, journal portfolios, photography, videos, responsive blog videographer, videography YouTube, podcasts, or video courses. It’s a flexible theme, which means that anyone, even if the user, does not have any programming knowledge. Can use it. If you’re working in the video industry or video blogs or blogging, a video magazine, or a video portal, you can enjoy the benefits this theme offers. Additionally, you can include various testimonials that include the name and picture of each customer. The Free Videography WordPress Theme is completely customizable and adaptable, bringing the user a pleasant experience on your site.There are many awesome features, including the ability to translate your website and browser compatibility to create an impressive website. Its theme options panel allows users to easily manage all site pages. The free Videography WordPress theme is the best method to make your company one that is a complete success. The theme is packed with essential elements and features like responsiveness, Woocommerce compatibility, SEO friendly, and more. The theme includes a “book an appointment” form as well as social media integration. Galleries that showcase the team members and much more.', 'videography-filmmaker' ); ?></P>		
			</div>
			<div class="col-pro-6">				
				<h4><?php esc_html_e( 'Theme Features', 'videography-filmmaker' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Options using Customizer API', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Responsive design', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Favicon, Logo, title and tagline customization', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Advanced Color options', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( '100+ Font Family Options', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Background Image Option', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Simple Menu Option', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Additional section for products', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Enable-Disable options on All sections', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Home Page setting for different sections', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Advance Slider with unlimited slides', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Partner Section', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Promotional Banner Section for Products', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Seperate Newsletter Section', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Text and call to action button for each slides', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Pagination option', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Custom CSS option', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Translations Ready', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Customizable Home Page', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Full-Width Template', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Footer Widgets & Editor Style', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Banner & Post Type Plugin Functionality', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Woo Commerce Compatible', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Multiple Inner Page Templates', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Product Sliders', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Slider', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Posttype', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Listing With Shortcode', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Contact page template', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Contact Widget', 'videography-filmmaker' ); ?></li>
					<li><?php esc_html_e( 'Advance Social Media Feature', 'videography-filmmaker' ); ?></li>
				</ul>				
			</div>
		</div>	

		<div id="tc_create" class="tabcontent">
			<h3><?php esc_html_e( 'Support', 'videography-filmmaker' ); ?></h3>
			<hr>
			<div class="tab-cont">
		  		<h4><?php esc_html_e( 'Need Support?', 'videography-filmmaker' ); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'Our team is obliged to help you in every way possible whenever you face any type of difficulties and doubts.', 'videography-filmmaker' ); ?></P>
					<a href="<?php echo esc_url( VIDEOGRAPHY_FILMMAKER_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'videography-filmmaker' ); ?></a>
				</div>
			</div>
			<div class="tab-cont">	
				<h4><?php esc_html_e('Reviews', 'videography-filmmaker'); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'It is commendable to have such a theme inculcated with amazing features and robust functionalities. I feel grateful to recommend this theme to one and all.', 'videography-filmmaker' ); ?></P>
					<a href="<?php echo esc_url( VIDEOGRAPHY_FILMMAKER_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'videography-filmmaker'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>