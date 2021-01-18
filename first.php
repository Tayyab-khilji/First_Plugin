<?php
/*
Plugin Name: First Plugin
Plugin URI: 
Description: First of many PLugin's By tayyab 
Version: 1.0
Author: Tayyab Rehman
Author URI: 
*/
add_action("admin_menu", "addMenu");
function addMenu()
{
 add_menu_page("Plugin Settings", "Plugin Settings", 4, "Plugin  Settings", "pluginSetting");
}
function pluginSetting()
{
    echo "hello World";
}
?>
