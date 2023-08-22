<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Videography Filmmaker
 */
get_header(); ?>

<?php do_action( 'videography_filmmaker_page_header' ); ?>

<div class="container space-top">
    <?php
    $videography_filmmaker_single_page_sidebar_layout = get_theme_mod( 'videography_filmmaker_single_page_sidebar_layout','One Column');
    if($videography_filmmaker_single_page_sidebar_layout == 'Left Sidebar'){ ?>
        <div class="row">
            <div id="sidebar" class="col-lg-4 col-md-4 mt-3">
                <?php dynamic_sidebar('sidebar-2'); ?>
            </div>
            <div class="middle-align col-lg-8 col-md-8">
                <main id="main" role="main" class="content-aa">
                    <?php if (get_theme_mod('videography_filmmaker_single_page_breadcrumb',true) != ''){ ?>
                                <div class="bradcrumbs">
                                    <?php videography_filmmaker_the_breadcrumb(); ?>
                                </div>
                    <?php }?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="feature-box">   
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content"><?php the_content();?></div>
                        <?php
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'videography-filmmaker' ),
                            'after'  => '</div>',
                        ) );
                        
                            //If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() )
                                comments_template();
                        ?>
                    <?php endwhile; // end of the loop. ?>             
                </main>
            </div>
        </div>     
    <?php }else if($videography_filmmaker_single_page_sidebar_layout == 'Right Sidebar'){ ?>   
        <div class="row">
            <div class="middle-align col-lg-8 col-md-8">
                <main id="main" role="main" class="content-aa">
                    <?php if (get_theme_mod('videography_filmmaker_single_page_breadcrumb',true) != ''){ ?>
                                <div class="bradcrumbs">
                                    <?php videography_filmmaker_the_breadcrumb(); ?>
                                </div>
                    <?php }?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="feature-box">   
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content"><?php the_content();?></div>
                        <?php
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'videography-filmmaker' ),
                            'after'  => '</div>',
                        ) );
                        
                            //If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() )
                                comments_template();
                        ?>
                    <?php endwhile; // end of the loop. ?>             
                </main>
            </div>
            <div id="sidebar" class="col-lg-4 col-md-4 mt-3">
                <?php dynamic_sidebar('sidebar-2'); ?>
            </div>
        </div> 
    <?php }else if($videography_filmmaker_single_page_sidebar_layout == 'One Column'){ ?>   
        <div class="row">
            <div class="middle-align">
                <main id="main" role="main" class="content-aa">
                    <?php if (get_theme_mod('videography_filmmaker_single_page_breadcrumb',true) != ''){ ?>
                                <div class="bradcrumbs">
                                    <?php videography_filmmaker_the_breadcrumb(); ?>
                                </div>
                    <?php }?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="feature-box">   
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content"><?php the_content();?></div>
                        <?php
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'videography-filmmaker' ),
                            'after'  => '</div>',
                        ) );
                        
                            //If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() )
                                comments_template();
                        ?>
                    <?php endwhile; // end of the loop. ?>             
                </main>
            </div>
        </div> 
    <?php }?>         
</div>
<div class="clearfix"></div>

<?php do_action( 'videography_filmmaker_page_footer' ); ?>

<?php get_footer(); ?>