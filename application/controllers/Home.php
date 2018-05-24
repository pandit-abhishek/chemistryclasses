<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

	public function index()
	{
		$this->render('site/home', 'full_width');
	}

	public function about(){
		$this->render('site/about', 'full_width');	
	}

	public function contact(){
		$this->render('site/contact', 'full_width');		
	}

	public function courses(){
		$this->render('site/courses', 'full_width');		
	}
}
