<?


/**Required: PHP Version above 5.3.0
 * Required: Wordpress Version above 2.6
 * Author: Moya Richards
 * Description: This is a partial wp_config file
 *                For security purposes this file is used to place the database settings, authentication Unique Keys,
 *               Salts, etc outside of the wp_config.php file
 *
 * Usage: 1. For use on a shared server where all folders are web accessible
 *        2. Get multiple wordpress installations located in separate folders to SHARE the same wp_config.php file
 *           by placing this file in the directory directly above the WordPress application directory.
 *
 * Security Techinique: Security through obscurity (http://en.wikipedia.org/wiki/Security_through_obscurity)
 *
 * Script Inspired by: http://www.devlounge.net/code/protect-your-wordpress-wp-config-so-you-dont-get-hacked

-----------------------------------------------------------------------------
WHY I CREATED THIS FILE:
-----------------------------------------------------------------------------
 * 1. Since Version 2.6, wp-config.php can be moved to the directory directly above the WordPress application directory.
 * But, for some people this folder is not always a non-web accessible root folder.
 * So this scripts takes security 1 step further by moving the sensitive information(database settings, Authentication Unique Keys and Salts)
 * that are SPECIFIC to each site into a complely different file which can be placed anywhere on the server.

 * 2. If you have gone through the process of organizing all your subdomains into the same folder
 * Then you will notice you can have only 1 wp_config.php in the directory above your wordpress installation folder.
 * This script solves this problem, by allowing you to define a new file containing all your wp_config settings
 *
 * **** Be smart put the file containing the sensitive information from your wp_config into a non web accessible folder *****
 *----  Hosting company's such as GODADDY allows users to create
 *----  a non-web accessible root folder by using a false domain name ( http://support.godaddy.com/help/article/4067?pc_split_value=2 )
 *----  You can then organize all your subdomains into the same folder; instructions here: ( http://www.kennycarlile.com/2010/03/23/godaddy-shared-hosting-multiple-domain-and-subdomain-management )
-----------------------------------------------------------------------------*/

if ( !defined('ABSPATH') ) {
	//checks for ABSPATH - ensures script does not run outside of wordpress

            /*NOTE: ABSPATH points to the Absolute path of the WordPress directory.
                    define('ABSPATH', dirname(__FILE__) . '/')
                    the wordpress variable ABSPATH is set in wp-load.php
                    wp-load.php loads before wp_config.php which means that
                    ABSPATH is defined before this script runs.
            */
       die();
  }

 define("NON_WEB_DIR", "/xampp/wp_config/wordpress_settings/");//this folder contains the files with the settings usually found in wp_config.php
 define('FILE_PREFIX','wp-config-settings_');       // filename prefix for the relocated wp_config file.
 define('CURR_WP_DIR_NAME',basename(ABSPATH));      // wordpress installation folder.


  set_config_location(CURR_WP_DIR_NAME,FILE_PREFIX);
   
   /* This function finds the name of the folder WordPress is installed in. 
    * and links the folder to the correct wp_config settings file
    */
   function set_config_location($wp_dir_name){

          //file containing all the settings usually found in wp_config
          $filename = FILE_PREFIX.$wp_dir_name.".php";  //  wp-config-settings_foldername.php;

          $wp_config_settings_file = NON_WEB_DIR.$filename;

          if (file_exists($wp_config_settings_file)) {
              global $table_prefix; // makes the value of $table_prefix accessible to this function	
              require_once($wp_config_settings_file); //loads the wp config settings
             }
          else {
                 $error_message = "<br />The file containing the configuration settings usually found in wp_config.php cannot be found <br />" .
                                     "<hr/>".
                                     "This file should be labelled <font color=red>". $filename. "</font><br />".
                                     "and stored in this folder <font color=#4278F5>". NON_WEB_DIR. "</font><p />".
                                     "<b>This missing file might be responsible for the error message below: </b><br />".
                                     "<hr/>";
                echo( $error_message);
               }

    } // end set_config_location function

/**comment out the require_once code BELOW in your original wp_config.php file to prevent
*  Fatal error: Call to a member function flush_rules() on a non-object
*/
require_once(ABSPATH . 'wp-settings.php'); /** Sets up WordPress vars and included files. */

?>