Relocate wordpress wpconfig settings
------------------------------------

Wordpress allows you to place the wp-config file one directory above the wordpress installation folder.
http://codex.wordpress.org/Hardening_WordPress#Securing_wp-config.php


This script allows you to place the information usually stored in the wp-config.php file whereever you choice to, even outside of a web accessable folder.
Security through obscurity is not a means to an end as far as security is concerned but it does help to delay an attacker who is trying to gather information from and about your site. This script comes in handy when you have two or more wordpress folders in the same web accessible directory and would still like to move the wp-config outside of that wordpress folder. 


1. The original wp_config.php should be renamed to wp-config-settings_*.php  , the star represents the name of the folder wordpress is installed into. for this example "singlesite" is the name of the folder.

----------EXAMPLE-----------------
      wp-config-settings_singlesite.php
---------------------------------

2. The last line at the end of the wp-config-settings_*.php document should be commented out.

----------EXAMPLE-----------------

      //require_once(ABSPATH . 'wp-settings.php');

----------------------------------------

3. This script should be name "wp-config.php", it essensially replaces the normal wp-config.php file.

some editing is required to customize the script, inorder to get it to work.


edit the path for the non web directory

    define("NON_WEB_DIR", "/xampp/wordpress_settings/");
//this folder contains the files with the settings usually found in wp_config.php