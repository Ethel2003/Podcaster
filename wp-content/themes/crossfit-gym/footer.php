<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CrossFit Gym
 */
 
$crossfit_gym_show_footersocial_settings  				= esc_attr( get_theme_mod('crossfit_gym_show_footersocial_settings', false) ); 
?>

<div class="site-footer">         
    <div class="container footer-fix">     
          <?php if ( is_active_sidebar( 'fw-column-1' ) ) : ?>
                <div class="fwcolumn-1">  
                    <?php dynamic_sidebar( 'fw-column-1' ); ?>
                </div>
           <?php endif; ?>
          
          <?php if ( is_active_sidebar( 'fw-column-2' ) ) : ?>
                <div class="fwcolumn-2">  
                    <?php dynamic_sidebar( 'fw-column-2' ); ?>
                </div>
           <?php endif; ?>
           
           <?php if ( is_active_sidebar( 'fw-column-3' ) ) : ?>
                <div class="fwcolumn-3">  
                    <?php dynamic_sidebar( 'fw-column-3' ); ?>
                </div>
           <?php endif; ?> 
           
           <?php if ( is_active_sidebar( 'fw-column-4' ) ) : ?>
                <div class="fwcolumn-4">  
                    <?php dynamic_sidebar( 'fw-column-4' ); ?>
                </div>
           <?php endif; ?>            
          	
           <div class="clear"></div>    
      </div><!--.footer-fix-->

        <div class="copyrigh-wrapper"> 
             <div class="container">             
                <div class="fcopy-left50">
				   <?php bloginfo('name'); ?> - <?php esc_html_e('Theme by Grace Themes','crossfit-gym'); ?>  
                </div>
                <div class="fcopy-right50">
				
                  <?php if( $crossfit_gym_show_footersocial_settings != ''){ ?>                
                    <div class="footericons">                                                
					   <?php $crossfit_gym_footfb_link = get_theme_mod('crossfit_gym_footfb_link');
                        if( !empty($crossfit_gym_footfb_link) ){ ?>
                        <a class="fab fa-facebook-f" target="_blank" href="<?php echo esc_url($crossfit_gym_footfb_link); ?>"></a>
                       <?php } ?>
                    
                       <?php $crossfit_gym_foottw_link = get_theme_mod('crossfit_gym_foottw_link');
                        if( !empty($crossfit_gym_foottw_link) ){ ?>
                        <a class="fab fa-twitter" target="_blank" href="<?php echo esc_url($crossfit_gym_foottw_link); ?>"></a>
                       <?php } ?>
                
                      <?php $crossfit_gym_footin_link = get_theme_mod('crossfit_gym_footin_link');
                        if( !empty($crossfit_gym_footin_link) ){ ?>
                        <a class="fab fa-linkedin" target="_blank" href="<?php echo esc_url($crossfit_gym_footin_link); ?>"></a>
                      <?php } ?> 
                      
                      <?php $crossfit_gym_footigram_link = get_theme_mod('crossfit_gym_footigram_link');
                        if( !empty($crossfit_gym_footigram_link) ){ ?>
                        <a class="fab fa-instagram" target="_blank" href="<?php echo esc_url($crossfit_gym_footigram_link); ?>"></a>
                      <?php } ?> 
                 </div><!--end .topright-30--> 
               <?php } ?>  
                
                </div>
                <div class="clear"></div>                                
             </div><!--end .container-->             
        </div><!--end .copyrigh-wrapper-->  
                             
     </div><!--end #site-footer-->
</div><!--#end SiteWrapper-->
<?php wp_footer(); ?>
</body>
</html>