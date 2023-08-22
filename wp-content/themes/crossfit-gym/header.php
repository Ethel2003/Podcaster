<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package CrossFit Gym
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
?>
<a class="skip-link screen-reader-text" href="#CGym_Tabnavi_hdr">
<?php esc_html_e( 'Skip to content', 'crossfit-gym' ); ?>
</a>
<?php
$crossfit_gym_show_contactdetails_settings 	   			  = esc_attr( get_theme_mod('crossfit_gym_show_contactdetails_settings', false) ); 
$crossfit_gym_show_slider_settings 	  = esc_attr( get_theme_mod('crossfit_gym_show_slider_settings', false) );
$crossfit_gym_show_aboutus_section             = esc_attr( get_theme_mod('crossfit_gym_show_aboutus_section', false) );
$crossfit_gym_show_video_section             = esc_attr( get_theme_mod('crossfit_gym_show_video_section', false) );  
$crossfit_gym_show_4columns_sections       = esc_attr( get_theme_mod('crossfit_gym_show_4columns_sections', false) );
?>
<div id="SiteWrapper" <?php if( get_theme_mod( 'crossfit_gym_layouttype' ) ) { echo 'class="boxlayout"'; } ?>>
<?php
if ( is_front_page() && !is_home() ) {
	if( !empty($crossfit_gym_show_slider_settings)) {
	 	$innerpage_cls = '';
	}
	else {
		$innerpage_cls = 'innerpage_header';
	}
}
else {
$innerpage_cls = 'innerpage_header';
}
?>

<div class="site-header <?php echo esc_attr($innerpage_cls); ?> "> 
    <div class="topstrip">      
       <div class="container">  
        <?php if( $crossfit_gym_show_contactdetails_settings != ''){ ?>         
          <div class="hdrcontact_details">          
		   <?php 
            $email = get_theme_mod('crossfit_gym_emailid');
               if( !empty($email) ){ ?>                
                 <div class="infobox">
                     <i class="fas fa-envelope-open-text"></i>
					 <?php
						$crossfit_gym_emailtext = get_theme_mod('crossfit_gym_emailtext');
						if( !empty($crossfit_gym_emailtext) ){ ?>
						<?php echo esc_html($crossfit_gym_emailtext); ?>
                     <?php } ?>
                     <span>
                        <a href="<?php echo esc_url('mailto:'.sanitize_email($email)); ?>"><?php echo sanitize_email($email); ?></a>
                    </span> 
                </div>            
          <?php } ?>		  
		  
		  <?php $crossfit_gym_phonenumber = get_theme_mod('crossfit_gym_phonenumber');
               if( !empty($crossfit_gym_phonenumber) ){ ?>              
                 <div class="infobox">
                     <i class="fas fa-phone-volume"></i>  
                      <?php
						$crossfit_gym_callustext = get_theme_mod('crossfit_gym_callustext');
						if( !empty($crossfit_gym_callustext) ){ ?>
						<?php echo esc_html($crossfit_gym_callustext); ?>
                     <?php } ?>                     
                     <span><?php echo esc_html($crossfit_gym_phonenumber); ?></span>   
                 </div>       
         <?php } ?>        
         </div><!--end .hdrcontact_details-->
       <?php } ?> 
         
             <div class="clear"></div>
         </div><!-- .container -->
    </div><!-- .topstrip -->  

          
  <div class="hdr-logo-menu">    
       <div class="container">      
        <div class="logo">
           <?php crossfit_gym_the_custom_logo(); ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div><!-- logo --> 
        <div class="hdr_rightmenupart">      
         <div id="navigationpanel">       
		     <button class="menu-toggle" aria-controls="main-navigation" aria-expanded="false" type="button">
			    <span aria-hidden="true"><?php esc_html_e( 'Menu', 'crossfit-gym' ); ?></span>
			    <span class="dashicons" aria-hidden="true"></span>
		     </button>
		    <nav id="main-navigation" class="site-hdrmenu primary-navigation" role="navigation">
				<?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => 'ul',
                    'menu_id' => 'primary',
                    'menu_class' => 'primary-menu menu',
                ) );
                ?>
		     </nav><!-- .site-hdrmenu -->
	       </div><!-- #navigationpanel -->     
         </div><!-- .hdr_rightmenupart -->     
        <div class="clear"></div>
     </div><!-- .container -->   
 </div><!-- .hdr-logo-menu -->  
</div><!--.site-header --> 
 
<?php 
if ( is_front_page() && !is_home() ) {
if($crossfit_gym_show_slider_settings != '') {
	for($i=1; $i<=3; $i++) {
	  if( get_theme_mod('crossfit_gym_headerslide'.$i,false)) {
		$slider_Arr[] = absint( get_theme_mod('crossfit_gym_headerslide'.$i,true));
	  }
	}
?> 
<div class="HeaderSlider">              
<?php if(!empty($slider_Arr)){ ?>
<div id="slider" class="nivoSlider">
<?php 
$i=1;
$slidequery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $slider_Arr, 'orderby' => 'post__in' ) );
while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
?>
<?php if(!empty($image)){ ?>
<img src="<?php echo esc_url( $image ); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php }else{ ?>
<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php } ?>
<?php $i++; endwhile; ?>
</div>   

<?php 
$j=1;
$slidequery->rewind_posts();
while( $slidequery->have_posts() ) : $slidequery->the_post(); ?>                 
    <div id="slidecaption<?php echo esc_attr( $j ); ?>" class="nivo-html-caption">         
     <h2><?php the_title(); ?></h2>
     <p><?php $excerpt = get_the_excerpt(); echo esc_html( crossfit_gym_string_limit_words( $excerpt, esc_attr(get_theme_mod('crossfit_gym_excerpt_length_forslides','15')))); ?></p>
		<?php
        $crossfit_gym_headerslide_btntext = get_theme_mod('crossfit_gym_headerslide_btntext');
        if( !empty($crossfit_gym_headerslide_btntext) ){ ?>
            <a class="slidermorebtn" href="<?php the_permalink(); ?>"><?php echo esc_html($crossfit_gym_headerslide_btntext); ?></a>
        <?php } ?>                  
    </div>   
<?php $j++; 
endwhile;
wp_reset_postdata(); ?>   
<?php } ?>
 </div><!-- .HeaderSlider -->    
<?php } } ?>   
        
<?php if ( is_front_page() && ! is_home() ) { ?>

	 <?php if( $crossfit_gym_show_aboutus_section != ''){ ?>  
      <section id="site-sections1">
        <div class="container">                               
            <?php 
            if( get_theme_mod('crossfit_gym_aboutpage',false)) {     
            $queryvar = new WP_Query('page_id='.absint(get_theme_mod('crossfit_gym_aboutpage',true)) );			
                while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>             
                  
                  <div class="about-imgbxleft">
                    <?php the_post_thumbnail();?>
                  </div>                  
                  <div class="about-contentbxright">  
					  <?php
                        $crossfit_gym_aboutsubtitle = get_theme_mod('crossfit_gym_aboutsubtitle');
                        if( !empty($crossfit_gym_aboutsubtitle) ){ ?>
                        <h4 class="sub_title"><?php echo esc_html($crossfit_gym_aboutsubtitle); ?></h4>
                       <?php } ?>    
                      <h3><?php the_title(); ?></h3>   
                      <p><?php $excerpt = get_the_excerpt(); echo esc_html( crossfit_gym_string_limit_words( $excerpt, esc_attr(get_theme_mod('crossfit_gym_aboutus_excerptlength','40')))); ?></p> 
                      
					   <?php
                        $crossfit_gym_aboutquote = get_theme_mod('crossfit_gym_aboutquote');
                        if( !empty($crossfit_gym_aboutquote) ){ ?>
                        <h5 class="quote"><?php echo esc_html($crossfit_gym_aboutquote); ?></h5>
                       <?php } ?>   
                       <a href="<?php the_permalink(); ?>" class="servicesemore"><?php esc_html_e( 'Read More', 'crossfit-gym' ); ?></a> 
                             
                  </div>                  
                                                                           
                <?php endwhile;
                 wp_reset_postdata(); ?>                                    
                <?php } ?>                                 
           <div class="clear"></div>                       
         </div><!-- .container -->
        </section><!-- #site-sections1-->
     <?php } ?>
     
     
     
     <?php if( $crossfit_gym_show_video_section != ''){ ?>  
      <section id="site-sections2">
        <div class="container">                               
            <?php 
            if( get_theme_mod('crossfit_gym_videopage',false)) {     
            $queryvar = new WP_Query('page_id='.absint(get_theme_mod('crossfit_gym_videopage',true)) );			
                while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>             
                                 
                  <div class="video_title">					     
                      <h2><?php the_title(); ?></h2>  
                  </div> 
                  <div class="video_description">
				   <p><?php $excerpt = get_the_excerpt(); 
				   echo esc_html( crossfit_gym_string_limit_words( $excerpt, esc_attr(get_theme_mod('crossfit_gym_videopage_excerptlength','40')))); ?></p>
                  </div> 
                  <div class="clear"></div> 
                  <div class="videoFullimg">
                    <?php the_post_thumbnail();?>
                     <div class="videobox">				
<a href="url" class="youtube-link" youtubeid="<?php $crossfit_gym_youtubeid = get_theme_mod('crossfit_gym_youtubeid'); if( !empty($crossfit_gym_youtubeid) ){ ?><?php echo esc_html($crossfit_gym_youtubeid); ?><?php } ?>"><div class="playbtn"></div></a>	
					</div>                      
                           
                  </div>                 
                         
                <?php endwhile;
                 wp_reset_postdata(); ?>                                    
                <?php } ?>                                 
           <div class="clear"></div>                       
         </div><!-- .container -->
        </section><!-- #site-sections2-->
     <?php } ?>



   <?php if( $crossfit_gym_show_4columns_sections != ''){ ?> 
   <section id="site-sections3">
     <div class="container">       
			<?php
            $crossfit_gym_sectiontitle = get_theme_mod('crossfit_gym_sectiontitle');
            if( !empty($crossfit_gym_sectiontitle) ){ ?>
                <h2 class="section_title"><?php echo esc_html($crossfit_gym_sectiontitle); ?></h2>
             <?php } ?>
             
             <?php
            $crossfit_gym_4columnsubtitle = get_theme_mod('crossfit_gym_4columnsubtitle');
            if( !empty($crossfit_gym_4columnsubtitle) ){ ?>
                <div class="subtitle"><?php echo esc_html($crossfit_gym_4columnsubtitle); ?></div>
             <?php } ?> 
                         
          <?php 
                for($n=1; $n<=4; $n++) {    
                if( get_theme_mod('crossfit_gym_4columnpage'.$n,false)) {      
                    $queryvar = new WP_Query('page_id='.absint(get_theme_mod('crossfit_gym_4columnpage'.$n,true)) );		
                    while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>     
                     <div class="sr-column-25 <?php if($n % 4 == 0) { echo "last_column"; } ?>">                                                                   
							 <?php if(has_post_thumbnail() ) { ?>
                                <div class="iconbox">
                                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>                                
                                </div>        
                             <?php } ?>
                             <div class="sr-column-descbx">              	
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                <p><?php $excerpt = get_the_excerpt(); echo esc_html( crossfit_gym_string_limit_words( $excerpt, esc_attr(get_theme_mod('crossfit_gym_4column_excerptlength','0')))); ?></p> 
								<?php
                                    $crossfit_gym_4column_readmorebutton = get_theme_mod('crossfit_gym_4column_readmorebutton');
                                    if( !empty($crossfit_gym_4column_readmorebutton) ){ ?>
                                    <a class="morebtnstyle2" href="<?php the_permalink(); ?>"><?php echo esc_html($crossfit_gym_4column_readmorebutton); ?></a>
                                <?php } ?>  
                             </div>                                                      
                     </div>
                    <?php endwhile;
                    wp_reset_postdata();                                  
                } } ?>                                 
               <div class="clear"></div> 
       
      </div><!-- .container -->
    </section><!-- #site-sections3 -->
  <?php } ?>
<?php } ?>