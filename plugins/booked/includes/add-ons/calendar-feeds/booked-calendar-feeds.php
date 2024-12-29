<?php

// Deactivate the original add-on plugin.
add_action( 'init', 'deactivate_booked_cal_feeds' );
function deactivate_booked_cal_feeds(){
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if(in_array('booked-calendar-feeds/booked-calendar-feeds.php', apply_filters('active_plugins', get_option('active_plugins')))){
		deactivate_plugins(plugin_basename('booked-calendar-feeds/booked-calendar-feeds.php'));
	}
}

add_action('plugins_loaded','init_booked_calendar_feeds');
function init_booked_calendar_feeds(){
        if(get_option('quickcal_feed_hash', false)){
            $secure_hash = get_option('quickcal_feed_hash');
        }
        else{
            $random_string = md5(time().'Xyb'.rand(time(), time()+500).'KJD');
            $secure_hash = str_shuffle($random_string);
            update_option('quickcal_feed_hash', $secure_hash);
        }
        
	define('BOOKEDICAL_SECURE_HASH',$secure_hash);
	define('BOOKEDICAL_PLUGIN_DIR', dirname(__FILE__));
	
	$Booked_Calendar_Feed_Plugin = new Booked_Calendar_Feed_Plugin();
	
}

class Booked_Calendar_Feed_Plugin {

	public function __construct() {

		add_action('init', array(&$this, 'booked_ical_feed') );

	}

	public function booked_ical_feed(){

		if (isset($_GET['booked_ical'])):
			include(BOOKEDICAL_PLUGIN_DIR . DIRECTORY_SEPARATOR . 'calendar-feed.php');
			exit;
		endif;

	}

}
