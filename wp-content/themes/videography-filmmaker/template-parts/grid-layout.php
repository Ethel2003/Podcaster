<?php
/**
 * The template part for displaying slider
 *
 * @package Videography Filmmaker
 * @subpackage videography_filmmaker
 * @since Videography Filmmaker 1.0
 */
?>
<div class="col-lg-4 col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="services-box mb-5">    
      <?php if(has_post_thumbnail() && get_theme_mod( 'videography_filmmaker_feature_image_hide',true) != '') { ?>
        <div class="service-image">
          <a href="<?php echo esc_url( get_permalink() ); ?>">
            <?php  the_post_thumbnail(); ?>
            <span class="screen-reader-text"><?php the_title(); ?></span>
          </a>
        </div>
      <?php }?>
      <div class="lower-box">
        <h2 class="pt-0"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
        <?php if(get_the_excerpt()) { ?>
          <p><?php $videography_filmmaker_excerpt = get_the_excerpt(); echo esc_html( videography_filmmaker_string_limit_words( $videography_filmmaker_excerpt, esc_attr(get_theme_mod('videography_filmmaker_post_excerpt_length','20')))); ?><?php echo esc_html( get_theme_mod('videography_filmmaker_button_excerpt_suffix','[...]') ); ?></p>
        <?php }?>
        <?php if ( get_theme_mod('videography_filmmaker_post_button_text','Read More') != '' ) {?>
          <div class="read-btn mt-4">
            <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" ><?php echo esc_html( get_theme_mod('videography_filmmaker_post_button_text',__( 'Read More','videography-filmmaker' )) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('videography_filmmaker_post_button_text',__( 'Read More','videography-filmmaker' )) ); ?></span>
            </a>
          </div>
        <?php }?>
      </div>
    </div>
  </article>
</div>