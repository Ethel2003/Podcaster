<?php
/**
 * @package CrossFit Gym
 */
?>
<div class="Bpostsbxstyle">
 <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
   <div class="CGblog_content_style">    
    <header class="entry-header">
        <?php the_title( '<h3 class="single-title">', '</h3>' ); ?>    
           <div class="blog_postmeta">
			 <?php if( get_theme_mod( 'crossfit_gym_hide_postdate_fromsingle' ) == '') { ?> 
                  <div class="post-date"> <i class="far fa-clock"></i>  <?php echo esc_html( get_the_date() ); ?></div><!-- post-date --> 
                <?php } ?> 
                
                <?php if( get_theme_mod( 'crossfit_gym_hide_postcats_fromsingle' ) == '') { ?> 
                  <span class="blogpost_cat"> <i class="far fa-folder-open"></i> <?php the_category( __( ', ', 'crossfit-gym' ));?></span>
               <?php } ?>  
             </div><!-- .blog_postmeta -->   
    </header><!-- .entry-header -->
    <div class="entry-content">		
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'crossfit-gym' ),
            'after'  => '</div>',
        ) );
        ?>
        <div class="postmeta">          
            <div class="post-tags"><?php the_tags(); ?> </div>
            <div class="clear"></div>
        </div><!-- postmeta -->
    </div><!-- .entry-content -->   
    <footer class="entry-meta">
      <?php edit_post_link( __( 'Edit', 'crossfit-gym' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
    </div><!-- .CGblog_content_style--> 
 </article>
</div><!-- .Bpostsbxstyle-->