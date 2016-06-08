<?php
/*
Plugin Name: Vol de nuit
Plugin URI: https://github.com/ms-studio/
Description: Plugin de fonctionalité pour mettre Jetpack en mode Dev.
Version: 0.1
Author: Manuel Schmalstieg
Author URI: http://ms-studio.net
*/

// Infos: https://jetpack.com/support/development-mode/

add_filter( 'jetpack_development_mode', '__return_true' );
