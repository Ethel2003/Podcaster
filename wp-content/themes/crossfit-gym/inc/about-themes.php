<?php
/**
 * CrossFit Gym About Theme
 *
 * @package CrossFit Gym
 */

//about theme info
add_action( 'admin_menu', 'crossfit_gym_abouttheme' );
function crossfit_gym_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'crossfit-gym'), __('About Theme Info', 'crossfit-gym'), 'edit_theme_options', 'crossfit_gym_guide', 'crossfit_gym_mostrar_guide');   
} 

//Info of the theme
function crossfit_gym_mostrar_guide() { 	
?>

<h1><?php esc_html_e('About Theme Info', 'crossfit-gym'); ?></h1>
<hr />  

<p><?php esc_html_e('CrossFit Gym is a creative and responsive, feature-rich and user-friendly, impressive and high-performance fresh and dynamic free gym WordPress theme for any kind of fitness and health related projects. This theme is a perfect platform for building an elegant website for fitness club, gym, health spa, personal trainer, yoga studios and any similar fitness website. This is a multi-concept and multipurpose theme that suits a different type of business and project ideas. Its goal is to create an online space and comfortable website for your fitness cub.', 'crossfit-gym'); ?></p>

<h2><?php esc_html_e('Theme Features', 'crossfit-gym'); ?></h2>
<hr />  
 
<h3><?php esc_html_e('Theme Customizer', 'crossfit-gym'); ?></h3>
<p><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'crossfit-gym'); ?></p>


<h3><?php esc_html_e('Responsive Ready', 'crossfit-gym'); ?></h3>
<p><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'crossfit-gym'); ?></p>


<h3><?php esc_html_e('Cross Browser Compatible', 'crossfit-gym'); ?></h3>
<p><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'crossfit-gym'); ?></p>


<h3><?php esc_html_e('E-commerce', 'crossfit-gym'); ?></h3>
<p><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'crossfit-gym'); ?></p>

<hr />  	
<p><a href="http://www.gracethemesdemo.com/documentation/crossfit-gym/#homepage-lite" target="_blank"><?php esc_html_e('Documentation', 'crossfit-gym'); ?></a></p>

<?php } ?>