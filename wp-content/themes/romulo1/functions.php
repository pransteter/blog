<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 825, 510, true );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
'primary' => __( 'Primary Menu',      'twentyfifteen' ),
'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
) );

add_post_type_support( 'page', 'excerpt' );