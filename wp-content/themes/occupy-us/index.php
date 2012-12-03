<?php
/**
 *
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<div class="container">

<div class="row content">
  <div class="span8 offset2">
    <?php
              // Blog post query
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    query_posts( array( 'post_type' => 'post', 'paged'=>$paged, 'showposts'=>4) );
    if (have_posts()) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class(); ?>>
      <div class="row">
        <div class="span8"><?php // Checking for a post thumbnail
        if ( has_post_thumbnail() ) ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
          <?php the_post_thumbnail('full');?></a>
      <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
      <p class="meta"><?php echo occupy_posted_on();?> <span class="byline"> <span class="sep"> by </span> <?php if ( function_exists( 'coauthors_posts_links' ) ) {
            coauthors_posts_links();
        } else {
            the_author_posts_link();
        } ?></span></span>
      </p>

         <?php the_excerpt();?>
       </div><!-- /.span6 -->
     </div><!-- /.row -->
     <hr />
   </div><!-- /.post_class -->
 <?php endwhile; endif; ?>

</div><!-- /.span8 -->
</div><!-- /.row .content -->
<?php get_footer(); ?>
