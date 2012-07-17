<?php
include('./wp-load.php');
$docs_to_wp = new Docs_To_WP();
$gdClient = $docs_to_wp->docs_to_wp_init( 'occupyamericaweb@gmail.com', 'c9EAwxMh' );
$docs_to_wp->retrieve_docs_for_web( $gdClient, '0Bx5ww8BRSHnJcVYtX3RwRWhNQ2c', '0Bx5ww8BRSHnJMzIxSG9wdm5aZm8' );
