<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| CI Bootstrap 3 Configuration
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views 
| when calling MY_Controller's render() function. 
| 
| See example and detailed explanation from:
| 	/application/config/ci_bootstrap_example.php
*/

$config['ci_bootstrap'] = array(

	// Site name
	'site_name' => 'CI Bootstrap 3',

	// Default page title prefix
	'page_title_prefix' => '',

	// Default page title
	'page_title' => '',

	// Default meta data
	'meta_data'	=> array(
		'author'		=> '',
		'description'	=> '',
		'keywords'		=> ''
	),

	// Default scripts to embed at page head or end
	'scripts' => array(
		'head'	=> array(
			
		),
		'foot'	=> array(
			"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js",
			"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js",
			"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js",
			"assets/dist/frontend/custom.js"
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'assets/dist/frontend/lib.min.css',
			'assets/dist/frontend/app.min.css',
			'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
			'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
			'assets/dist/frontend/demo.css',
			'assets/dist/frontend/gallery-grid.css',
			'assets/dist/frontend/style.css',


		)
	),

	// Default CSS class for <body> tag
	'body_class' => '',
	
	// Multilingual settings
	'languages' => array(
		// 'default'		=> 'en',
		// 'autoload'		=> array('general'),
		// 'available'		=> array(
		// 	'en' => array(
		// 		'label'	=> 'English',
		// 		'value'	=> 'english'
		// 	),
		// 	'zh' => array(
		// 		'label'	=> '繁體中文',
		// 		'value'	=> 'traditional-chinese'
		// 	),
		// 	'cn' => array(
		// 		'label'	=> '简体中文',
		// 		'value'	=> 'simplified-chinese'
		// 	),
		// 	'es' => array(
		// 		'label'	=> 'Español',
		// 		'value' => 'spanish'
		// 	)
		// )
	),

	// Google Analytics User ID
	'ga_id' => '',

	// Menu items
	'menu' => array(
		'home' => array(
			'name'		=> 'Home',
			'url'		=> '',
		),
		'about' => array(
			'name'		=> 'About',
			'url'		=> 'home/about',
		),
		'courses' => array(
			'name'		=> 'Courses',
			'url'		=> '#',
		),
		'gallery' => array(
			'name'		=> 'Gallery',
			'url'		=> '#',
		),
		'contact' => array(
			'name'		=> 'Contact',
			'url'		=> 'home/contact',
		),
	),

	// Login page
	'login_url' => '',

	// Restricted pages
	'page_auth' => array(
	),

	// Email config
	'email' => array(
		'from_email'		=> '',
		'from_name'			=> '',
		'subject_prefix'	=> '',
		
		// Mailgun HTTP API
		'mailgun_api'		=> array(
			'domain'			=> '',
			'private_api_key'	=> ''
		),
	),

	// Debug tools
	'debug' => array(
		'view_data'	=> FALSE,
		'profiler'	=> FALSE
	),
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_frontend';