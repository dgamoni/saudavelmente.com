<?php
// menu
if (function_exists('register_nav_menu')) {
    register_nav_menus( array( 'primary' => 'Header menu', ) );
    register_nav_menus( array( 'footer_1' => 'Footer menu col 1', ) );
    register_nav_menus( array( 'footer_2' => 'Footer menu col 2', ) );
    register_nav_menus( array( 'footer_3' => 'Footer menu col 3', ) );
    register_nav_menus( array( 'footer_4' => 'Footer menu col 4', ) );
    register_nav_menus( array( 'footer_5' => 'Footer menu col 5', ) );
    register_nav_menus( array( 'footer_6' => 'Footer menu col 6', ) );
    register_nav_menus( array( 'left_menu' => 'Left menu', ) );
    register_nav_menus( array( 'mobil_header_menu' => 'Mobil header menu', ) );
}

