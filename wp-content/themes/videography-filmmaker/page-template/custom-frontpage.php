<?php
/**
 * The template for displaying home page.
 *
 * Template Name: Custom Home Page
 *
 * @package Videography Filmmaker
 */
get_header(); ?>

<main id="main" role="main">
  
  <?php if( get_theme_mod( 'videography_filmmaker_slider_hide_show') != '' || get_theme_mod('videography_filmmaker_slider_responsive') != ''){ ?>
    <div class="slider-section position-relative">
      <section id="slider">
        
        <div class="slider-content">
          <div class="slider-head text-center">
            <?php if(get_theme_mod('videography_filmmaker_slider_section_title') != ''){?>
              <h1><?php echo esc_html(get_theme_mod('videography_filmmaker_slider_section_title')); ?></h1>
            <?php }?>
            <?php if(get_theme_mod('videography_filmmaker_slider_section_text') != ''){?>
              <p><?php echo esc_html(get_theme_mod('videography_filmmaker_slider_section_text')); ?></p>
            <?php }?>
            <?php if(get_theme_mod('videography_filmmaker_slider_section_btn_text') != '' || get_theme_mod('videography_filmmaker_slider_section_btn_url') != ''){?>
              <div class="talk-btn">
                <a href="<?php echo esc_url(get_theme_mod('videography_filmmaker_slider_section_btn_url')); ?>"><i class="fab fa-whatsapp me-2"></i><?php echo esc_html(get_theme_mod('videography_filmmaker_slider_section_btn_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('videography_filmmaker_slider_section_btn_text')); ?></span></a>
              </div>
            <?php }?>
          </div>
          <div class="owl-carousel">
            <?php
            $videography_filmmaker_slider_category = get_theme_mod('videography_filmmaker_slider_category');
            if($videography_filmmaker_slider_category){
              $page_query = new WP_Query(array( 'category_name' => esc_html( $videography_filmmaker_slider_category ,'videography-filmmaker')));
              $i = 1;
              while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                <div class="slider-box position-relative">
                  <span class="slider-num"><?php if($i <=9 ) { echo esc_html(0); } echo esc_html($i); ?></span>
                  <div class="bx-image">
                    <?php if(has_post_thumbnail()){
                      the_post_thumbnail();
                    } ?>
                  </div>
                </div>
              <?php $i++; endwhile;
              wp_reset_postdata();
            } ?>
          </div>
        </div>
      </section> 
    </div>  
  <?php }?>

  <?php do_action( 'videography_filmmaker_before_product_section' ); ?>

  <?php if(get_theme_mod('videography_filmmaker_section_title') != '' || get_theme_mod('videography_filmmaker_service_category') != ''){ ?>
    <section id="service-section" class="py-5 text-center">
      <div class="container">
        <div class="service-head mb-4">
          <?php if(get_theme_mod('videography_filmmaker_section_title') != ''){ ?>
            <h2><?php echo esc_html(get_theme_mod('videography_filmmaker_section_title')); ?></h2>
          <?php }?>
        </div>
        <div class="row">
          <?php
          $videography_filmmaker_service_category = get_theme_mod('videography_filmmaker_service_category');
          if($videography_filmmaker_service_category){
            $page_query = new WP_Query(array( 'category_name' => esc_html( $videography_filmmaker_service_category ,'videography-filmmaker')));
            while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="col-lg-3 col-md-6 align-self-center">
                <div class="service-box position-relative">
                  <div class="bx-image">
                    <?php if(has_post_thumbnail()){
                      the_post_thumbnail();
                    } ?>
                  </div>
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          } ?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'videography_filmmaker_after_product_section' ); ?>

  <div id="content-ma" class="py-5">
  	<div class="container">
    	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
  	</div>
  </div>
</main>

<?php get_footer(); ?>