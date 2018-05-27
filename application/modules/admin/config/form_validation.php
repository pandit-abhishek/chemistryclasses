<?php

/**
 * Config file for form validation
 * Reference: http://www.codeigniter.com/user_guide/libraries/form_validation.html
 * (Under section "Creating Sets of Rules")
 */

$config = array(

	// Admin User Login
	'login/index' => array(
		array(
			'field'		=> 'username',
			'label'		=> 'Username',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'password',
			'label'		=> 'Password',
			'rules'		=> 'required',
		),
	),

	// Create User
	'user/create' => array(
		array(
			'field'		=> 'first_name',
			'label'		=> 'First Name',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'last_name',
			'label'		=> 'Last Name',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'username',
			'label'		=> 'Username',
			'rules'		=> 'is_unique[users.username]',				// use email as username if empty
		),
		array(
			'field'		=> 'email',
			'label'		=> 'Email',
			'rules'		=> 'required|valid_email|is_unique[users.email]',
		),
		array(
			'field'		=> 'password',
			'label'		=> 'Password',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'retype_password',
			'label'		=> 'Retype Password',
			'rules'		=> 'required|matches[password]',
		),
	),

	// Reset User Password
	'user/reset_password' => array(
		array(
			'field'		=> 'new_password',
			'label'		=> 'New Password',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'retype_password',
			'label'		=> 'Retype Password',
			'rules'		=> 'required|matches[new_password]',
		),
	),

	// Create Admin User
	'panel/admin_user_create' => array(
		array(
			'field'		=> 'username',
			'label'		=> 'Username',
			'rules'		=> 'required|is_unique[users.username]',
		),
		array(
			'field'		=> 'first_name',
			'label'		=> 'First Name',
			'rules'		=> 'required',
		),
		/* Admin User can have no email
		array(
			'field'		=> 'email',
			'label'		=> 'Email',
			'rules'		=> 'valid_email|is_unique[users.email]',
		),*/
		array(
			'field'		=> 'password',
			'label'		=> 'Password',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'retype_password',
			'label'		=> 'Retype Password',
			'rules'		=> 'required|matches[password]',
		),
	),

	// Reset Admin User Password
	'panel/admin_user_reset_password' => array(
		array(
			'field'		=> 'new_password',
			'label'		=> 'New Password',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'retype_password',
			'label'		=> 'Retype Password',
			'rules'		=> 'required|matches[new_password]',
		),
	),

	// Admin User Update Info
	'panel/account_update_info' => array(
		array(
			'field'		=> 'username',
			'label'		=> 'Username',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'password',
			'label'		=> 'Password',
			'rules'		=> 'required',
		),
	),

	// Admin User Change Password
	'panel/account_change_password' => array(
		array(
			'field'		=> 'new_password',
			'label'		=> 'New Password',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'retype_password',
			'label'		=> 'Retype Password',
			'rules'		=> 'required|matches[new_password]',
		),
	),
	// Admin User Change Password
	'student/create' => array(
		array(
			'field'		=> 'FirstName',
			'label'		=> 'First Name',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'FathersName',
			'label'		=> 'Father\'s Name',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'MothersName',
			'label'		=> 'Mother\'s Name',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'dob',
			'label'		=> 'D.O.B',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'class',
			'label'		=> 'Class',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'courses',
			'label'		=> 'Courses',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'batch',
			'label'		=> 'batch',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'time',
			'label'		=> 'time',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'MobileNumber',
			'label'		=> 'Mobile Number',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'FeePerYear',
			'label'		=> 'Fee Per Year',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'FeePerMonth',
			'label'		=> 'Fee Per Month',
			'rules'		=> 'required',
		),
		array(
			'field'		=> 'stream',
			'label'		=> 'Stream',
			'rules'		=> 'required',
		),
	),

);