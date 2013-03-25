<?php

/*
  Plugin Name: User Id Override
	Plugin URI: 
	Plugin Description: Changes User Id displays to use Full Name from user profile
	Plugin Version: 0.9
	Plugin Date: 2013-03-25
	Plugin Author: Question2Answer
	Plugin Author URI: http://www.question2answer.org/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: 
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

	// Register the fact that we're replacing core functions in this plugin module
	qa_register_plugin_overrides('qa-userid-overrides.php');
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
