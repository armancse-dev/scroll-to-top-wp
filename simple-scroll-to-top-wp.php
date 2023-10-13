<?php
/**
 * Plugin Name: Simple Scroll To Top WP
 * Plugin URI: https://wordpress.org/plugins/simple-scroll-to-top-wp
 * Description: Simple scroll to top plugin will help you.
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.4
 * Author: Arman
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI: https://github.com/armancse-dev
 * Text Domain: sstt
 */

   // Including CSS
  function sstt_enqueue_style(){
    wp_enqueue_style('sstt-style', plugins_url('css/themes/sstt-style.css', __FILE__));
  }
  add_action( "wp_enqueue_scripts", "sstt_enqueue_style" );


  //includeingJS
  function sstt_enqueue_script(){
      wp_enqueue_script('jquery');
      wp_enqueue_script('sstt-plugin-script', plugins_url('js/sstt-plugin.js', __FILE__), array(), '1.0.0', true);
  }

  add_action( "wp_enqueue_scripts", "sstt_enqueue_script" );

    // jQuery Plugin Setting Activation
    function sstt_scroll_script(){?>
      <script>
      jQuery(document).ready(function () {
        jQuery.scrollUp();
      });
      </script>
      <?php }
      add_action( "wp_footer", "sstt_scroll_script" );
      
?>