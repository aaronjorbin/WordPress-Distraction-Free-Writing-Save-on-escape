<?php
/*
Plugin Name: WordPress Distraction Free Writing Save on Escape
Plugin URI: https://github.com/aaronjorbin/WordPress-Distraction-Free-Writing-Save-on-escape
Description: Trigger a save instead of triggering closing in Distraction Free Writing. 
Version: 0.1
Author URI: http://aaron.jorb.in
*/
class wpdfwsoe{
    function __construct(){
        add_action( 'admin_enqueue_scripts', array( $this , 'add_script' ) );
    }

    function add_script($hook){
        if ('post.php' !== $hook && 'post-new.php' !== $hook)
            return;
        wp_enqueue_script( 'wpdfwsoe', plugins_url('wpdfwsoe.js', __FILE__), array( 'wp-fullscreen' , ));
    }
}
new wpdfwsoe();
