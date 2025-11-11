<?php
/**
* Static Wrapper for Bootstrap Class
* Prevents T_STRING error when checking for 5.3.2
*/
class Favorites
{
	public static function init()
	{
		// dev/live
		global $favorites_env;
		$favorites_env = 'live';

		global $favorites_version;
		$favorites_version = '2.3.6';

		global $favorites_name;
		$favorites_name = 'Favorites';
		// Delay translation loading until init to avoid _load_textdomain_just_in_time notice.
		add_action( 'init', function() {
			global $favorites_name;
			$favorites_name = __('Favorites', 'favorites');
		}, 5 );

		$app = new Favorites\Bootstrap;
	}
}