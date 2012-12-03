<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Category listing page 
 * Description: Page template with a content container and right sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
   <div class="container">
        <div class="row content">
            <div class="span8 offset2">
                <header class="page-title">
                    <h1><?php the_title();?></h1>
                </header>
            <?php the_content();?>

                <?php wp_list_categories(array( 
                        'hide_empty' => 1,
                        'title_li'   => '',
                    )
                ); ?> 

<br /><br />
<?php endwhile; // end of the loop. ?>
          </div><!-- /.span8 -->
        </div><!-- /.row .content -->
<?php get_footer(); ?>
