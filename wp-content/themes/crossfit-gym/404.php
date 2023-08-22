<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package CrossFit Gym
 */

get_header(); ?>

<div class="container">
    <div id="CGym_Tabnavi_hdr">
        <div class="CGym_content-70">
           <div class="Bpostsbxstyle">
            <div class="CGblog_content_style"> 
             <header class="page-header">
                <h1 class="entry-title"><?php esc_html_e( '404 Not Found', 'crossfit-gym' ); ?></h1>                
            </header><!-- .page-header -->
            <div class="page-content">
                <p><?php esc_html_e( 'Looks like you have taken a wrong turn....Dont worry... it happens to the best of us.', 'crossfit-gym' ); ?></p>  
            </div><!-- .page-content -->
           </div><!--.CGblog_content_style-->
          </div><!--.Bpostsbxstyle-->      
       </div><!-- CGym_content-70-->   
        <?php get_sidebar();?>       
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>