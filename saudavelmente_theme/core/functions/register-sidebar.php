<?php  

function sidebar_init()
{
    register_sidebar(array(
        'name' => 'Left sidebar',
        'id' => 'left-sidebar',
        'description' => 'Left sidebar',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Mobil header menu',
        'id' => 'mobil_header_menu',
        'description' => 'Mobil header menu',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Mobil footer menu',
        'id' => 'mobil_footer_menu',
        'description' => 'Mobil footer menu',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'sidebar_init'); 