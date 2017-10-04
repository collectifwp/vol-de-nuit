<?php
/*
Plugin Name: Vol de nuit
Plugin URI: https://github.com/collectifwp/vol-de-nuit
Description: Plugin de fonctionalité pour mettre Jetpack en mode Dev.
Version: 0.1
Author: Collectif WP
Author URI: https://github.com/collectifwp/
*/

// Infos: https://jetpack.com/support/development-mode/

add_filter( 'jetpack_development_mode', '__return_true' );
