<?php
/**
 * @package Tribe-A
 */
/*
Plugin Name: Wordpress Plugin
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: Darius
Author URI: http://URI_Of_The_Plugin_Author
License: GLPv3
*/

/*
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

defined('ABSPATH') or die('No access for u'); //als deze file gerunt word door iets anders dan wordpress: stop

class Tribe_A_Plugin_Main
{
    function __construct() //runt zodra de class aangeroepen is. accepteerd arguments vanuit class call.
    {
    }

    function activation()
    {
        // do something on activation
    }

    function deactivation()
    {
        // do something on deactivation
    }

    function uninstall()
    {
        // werkt nog niet
        // do something on uninstall
    }
}

if(class_exists('Tribe_A_Plugin_Main')){
    $Tribe_A_Plugin_Main = new Tribe_A_Plugin_Main();
}

//activation
register_activation_hook(__file__ , array($Tribe_A_Plugin_Main, 'activation')); //on activation

//deactivation
register_deactivation_hook(__file__ , array($Tribe_A_Plugin_Main, 'deactivation')); //on deactivation

//uninstall
//register_uninstall_hook(__file__ , array($Tribe_A_Plugin_Main, 'uninstall')); //on uninstall
