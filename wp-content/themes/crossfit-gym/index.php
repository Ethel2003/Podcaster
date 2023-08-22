<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package CrossFit Gym
 */

get_header(); 
?>
<div class="container">
     <div id="CGym_Tabnavi_hdr">
        <div class="CGym_content-70 <?php if( esc_attr( get_theme_mod( 'crossfit_gym_hidesidebar_blogposts' )) ) { ?>fullwidth<?php } ?>">
        	 <div class="blankstyle-cg">
				<?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            get_template_part( 'content' );							
                    
                        endwhile;						
                        // Previous/next post navigation.
                        the_posts_pagination();
                    
                    else :
                        // If no content, include the "No posts found" template.
                         get_template_part( 'no-results' );
                    
                    endif;
                    ?>
                   
              </div><!-- blankstyle-cg -->
                   
             </div><!-- CGym_content-70-->   
             
           <?php if( esc_attr( get_theme_mod( 'crossfit_gym_hidesidebar_blogposts' )) == '') { ?> 
          		<?php get_sidebar();?>
        	<?php } ?>         
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- content -->
<?php get_footer(); ?>