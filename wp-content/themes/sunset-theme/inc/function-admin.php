<?php 

/*
@package sunset-theme

    ================
    ADMIN PAGE
    ================

*/

    //Generate Sunset Admin Page
//parametry: add_menu_page( 'page title', 'the menu title', 'capability', 'slug', function, 'icon', 'the position of our menu (msut be higher than 99)' );
function sunset_add_admin_page() {
    add_menu_page( 'Sunset Theme Options', 'Sunset', 'manage_options', 'robert_sunset', 'sunset_theme_create_page', get_template_directory_uri() . '/img/sunset-icon.png', 110);

    //Generate Sunset Admin Sub Pages
//parametry: add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callback $function);
    add_submenu_page( 'robert_sunset', 'Sunset Theme Settings', 'General', 'manage_options', 'robert_sunset', 'sunset_theme_create_page' );

    add_submenu_page( 'robert_sunset', 'Sunset CSS Options', 'Custom CSS', 'manage_options', 'robert_sunset_css', 'sunset_theme_settings_page' );

}

// tutaj uruchamian function sunset_add_admin_page
add_action ('admin_menu', 'sunset_add_admin_page');

function sunset_theme_create_page() {
    //generation of our admin page
    require_once( get_template_directory() . '/inc/templates/sunset-admin.php');
}


function sunset_theme_settings_page() {
    echo '<h1>Sunset Custom Css</h1>';
}


?>