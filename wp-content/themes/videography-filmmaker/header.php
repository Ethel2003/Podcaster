<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ma">
 *
 * @package Videography Filmmaker
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	<?php if(get_theme_mod('videography_filmmaker_preloader_hide',false)!= '' || get_theme_mod('videography_filmmaker_responsive_preloader_hide',false) != ''){ ?>
    <?php if(get_theme_mod( 'videography_filmmaker_preloader_type','center-square') == 'center-square'){ ?>
	    <div class='preloader'>
		    <div class='preloader-squares'>
				<div class='square'></div>
				<div class='square'></div>
				<div class='square'></div>
				<div class='square'></div>
		    </div>
			</div>
    <?php }else if(get_theme_mod( 'videography_filmmaker_preloader_type') == 'chasing-square') {?>    
      <div class='preloader'>
				<div class='preloader-chasing-squares'>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
				</div>
			</div>
    <?php }?>
	<?php }?>
	<header role="banner">
		<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'videography-filmmaker' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'videography-filmmaker' );?></span></a>
		<div id="header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 align-self-center">
						<div class="logo text-md-start text-center">
			     	 	<?php if ( has_custom_logo() ) : ?>
		     	    	<div class="site-logo"><?php the_custom_logo(); ?></div>
	            <?php endif; ?>
	            <?php if( get_theme_mod( 'videography_filmmaker_site_title',true) != '') { ?>
		            <?php $blog_info = get_bloginfo( 'name' ); ?>
		            <?php if ( ! empty( $blog_info ) ) : ?>
			            <?php if ( is_front_page() && is_home() ) : ?>
			              <h1 class="site-title mt-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			            <?php else : ?>
			              <p class="site-title mt-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			            <?php endif; ?>
		            <?php endif; ?>
			        <?php }?>
			        <?php if( get_theme_mod( 'videography_filmmaker_site_tagline',true) != '') { ?>
		            <?php
		            $description = get_bloginfo( 'description', 'display' );
		            if ( $description || is_customize_preview() ) :
		            ?>
			            <p class="site-description">
			              <?php echo esc_html($description); ?>
			            </p>
		            <?php endif; ?>
			        <?php }?>
				    </div>
					</div>
					<div class="col-lg-8 col-md-7 col-6 align-self-center px-md-0">
						<div class="menubox <?php if( get_theme_mod( 'videography_filmmaker_sticky_header', false) != ''  || get_theme_mod('videography_filmmaker_responsive_sticky_header',false) != '') { ?> sticky-header<?php } else { ?>close-sticky <?php } ?> ps-lg-5">
							<?php if(has_nav_menu('primary')){ ?>
						   	<div class="toggle-menu responsive-menu text-end">
			           	<button role="tab" onclick="videography_filmmaker_menu_open()"><i class="<?php echo esc_attr(get_theme_mod('videography_filmmaker_responsive_open_menu_icon','fas fa-bars'));?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','videography-filmmaker'); ?></span></button>
			         	</div>
			         	<div id="menu-sidebar" class="nav side-menu">
			            <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'videography-filmmaker' ); ?>">
			              <?php 
			                wp_nav_menu( array( 
			                  'theme_location' => 'primary',
			                  'container_class' => 'main-menu-navigation clearfix' ,
			                  'menu_class' => 'clearfix',
			                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 p-0">%3$s</ul>',
			                  'fallback_cb' => 'wp_page_menu',
			                ) ); 
			              ?>
			              <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="videography_filmmaker_menu_close()"><i class="<?php echo esc_attr(get_theme_mod('videography_filmmaker_responsive_close_menu_icon','fas fa-times'));?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','videography-filmmaker'); ?></span></a>
			            </nav>
			        	</div>
			      	<?php }?>
			      </div>
					</div>
					<div class="col-lg-1 col-md-1 col-6 align-self-center text-md-end">
						<div class="search-box d-inline-block">
	        		<button type="button" onclick="videography_filmmaker_search_show()"><i class="fas fa-search"></i></button>
	        	</div>
		        <div class="search-outer">
		          <div class="serach_inner">
		          	<?php get_search_form(); ?>
		          </div>
		        	<button type="button" class="closepop" onclick="videography_filmmaker_search_hide()">X</button>
		        </div>
					</div>
				</div>
			</div>
		</div>
	</header>