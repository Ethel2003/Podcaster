<?php
/**
 * @package CrossFit Gym
 */
?>
 <div class="Bpostsbxstyle">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>     
         
		  <?php if( get_theme_mod( 'crossfit_gym_hide_postfeatured_image' ) == '') { ?> 
			 <?php if (has_post_thumbnail() ){ ?>
                <div class="blgimagebx <?php if( esc_attr( get_theme_mod( 'crossfit_gym_postimg_left30' )) ) { ?>imgLeft<?php } ?>">
                 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
             <?php } ?> 
          <?php } ?> 
       <div class="CGblog_content_style">     
        <header class="entry-header">
            <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>                           
            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="blog_postmeta">
                   <?php if( get_theme_mod( 'crossfit_gym_hide_blogdate' ) == '') { ?> 
                      <div class="post-date"> <i class="far fa-clock"></i>  <?php echo esc_html( get_the_date() ); ?></div><!-- post-date --> 
                    <?php } ?> 
                    
                    <?php if( get_theme_mod( 'crossfit_gym_hide_postcats' ) == '') { ?> 
                      <span class="blogpost_cat"> <i class="far fa-folder-open"></i> <?php the_category( __( ', ', 'crossfit-gym' ));?></span>
                   <?php } ?>  
                   
                                                   
                </div><!-- .blog_postmeta -->
            <?php endif; ?>                    
        </header><!-- .entry-header -->          
        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">           
         <p>
            <?php $crossfit_gym_arg = get_theme_mod( 'crossfit_gym_postsfullcontent_options','Excerpt');
              if($crossfit_gym_arg == 'Content'){ ?>
                <?php the_content(); ?>
              <?php }
              if($crossfit_gym_arg == 'Excerpt'){ ?>
                <?php if(get_the_excerpt()) { ?>
                  <?php $excerpt = get_the_excerpt(); echo esc_html( crossfit_gym_string_limit_words( $excerpt, esc_attr(get_theme_mod('crossfit_gym_postexcerptrange','30')))); ?>
                <?php }?>
                
                 <?php
					$crossfit_gym_postmorebuttontext = get_theme_mod('crossfit_gym_postmorebuttontext');
					if( !empty($crossfit_gym_postmorebuttontext) ){ ?>
					<a class="morebutton" href="<?php the_permalink(); ?>"><?php echo esc_html($crossfit_gym_postmorebuttontext); ?></a>
                <?php } ?>               
                
              <?php }?>
           </p>
                    
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'crossfit-gym' ) ); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'crossfit-gym' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        <?php endif; ?>
        <div class="clear"></div>
    </div><!-- .CGblog_content_style-->
    </article><!-- #post-## -->
</div>