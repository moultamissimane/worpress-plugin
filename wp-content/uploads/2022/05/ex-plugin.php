<?php

/*
Plugin Name:  Example Plugin
Plugin URI:  
Description:  A short little description of the plugin. 
Version:      1.0
Author:       MIT 
License:      GPL2
Text Domain:  wpb-plugin
Domain Path:  /languages
*/

add_action("admin_menu", "addMenu");
function addMenu()
{
    add_menu_page("Exapmle Options", "Example Options", 4, "example-options", "exampleMenu" );
}
function exampleMenu()
{
    echo "Hello World!";
}