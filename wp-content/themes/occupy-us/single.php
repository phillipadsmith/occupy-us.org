<?php
/**
 * The template for displaying all posts.
 *
 * Default Post Template
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
   <div class="container">
        <div class="row content">
            <div class="span8 offset2">
      <header class="post-title">
        <h1><?php the_title();?></h1>
      </header>
        <div class="post-featured-image"><?php // Checking for a post thumbnail
        if ( has_post_thumbnail() ) ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
          <?php the_post_thumbnail('full');?></a>
        </div>
        <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
            <?php the_content();?>
            <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
<?php bootstrapwp_content_nav('nav-below');?>
<?php endwhile; // end of the loop. ?>
<hr />
 <?php comments_template(); ?>
          </div><!-- /.span8 -->
        </div><!-- /.row .content -->
<?php get_footer(); ?>
