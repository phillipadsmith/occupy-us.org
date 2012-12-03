<?php
/*
Plugin Name: Extend Docs to WP like so
*/
 
add_filter( 'pre_docs_to_wp_insert', 'bdn_split_post' );
function bdn_split_post( $post_array = array() ) {
 
    $exploded_fields = explode( '|', $post_array[ 'post_content' ] );
     
    //Sometimes people forget a pipe, and we don't want to put the entire post in the headline
    if( is_array( $exploded_fields ) && count( $exploded_fields ) >= 2 ) {
 
        //Save the old title in case you want to do something with it
        $old_title = $post_array[ 'post_title' ];
 
        //Set the title to the first occurance.
        $post_array[ 'post_title' ] = strip_tags( $exploded_fields[ 0 ] );
         
        //Unset the title
        unset( $exploded_fields[ 0 ] );
         
        //Now restore the post content and save it
        $post_array[ 'post_content' ] = implode( '|', $exploded_fields );
         
    }
 
    return $post_array;
 
}
// adding the facebook and twitter links to the user profile
function occupy_add_user_fields( $contactmethods ) {
// Add Facebook
$contactmethods['user_fb'] = 'Facebook';
// Add Twitter
$contactmethods['user_tw'] = 'Twitter';
return $contactmethods;
}
add_filter('user_contactmethods','occupy_add_user_fields',10,1);


################################################################################
// Loading All CSS Stylesheets
################################################################################
function occupy_css_loader() {
    wp_enqueue_style('bootstrapwp', get_template_directory_uri().'/css/bootstrapwp.css', false ,'0.90', 'all' );
    wp_enqueue_style('prettify', get_template_directory_uri().'/js/google-code-prettify/prettify.css', false ,'1.0', 'all' );
    wp_enqueue_style('occupy', '/wp-content/themes/occupy-us/style.css', false ,'0.01', 'all' );
  }
add_action('wp_enqueue_scripts', 'occupy_css_loader');

/*
| -------------------------------------------------------------------
| Adding Post Thumbnails and Image Sizes
| -------------------------------------------------------------------
| */
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 160, 120 ); // 160 pixels wide by 120 pixels high
}

if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'bootstrap-small', 260, 180 ); // 260 pixels wide by 180 pixels high
  add_image_size( 'bootstrap-medium', 360, 268 ); // 360 pixels wide by 268 pixels high
  add_image_size( 'bootstrap-wide', 768, 600 ); // 360 pixels wide by 268 pixels high
} 
function occupy_posted_on() {
        printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a>', 'occupy' ),
                esc_url( get_permalink() ),
                esc_attr( get_the_time() ),
                esc_attr( get_the_date( 'c' ) ),
                esc_html( get_the_date() )
        );
}
