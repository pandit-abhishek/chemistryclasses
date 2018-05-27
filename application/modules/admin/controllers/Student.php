<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
		$this->load->model('StudentModel' , 'student');
	}

	// Frontend User CRUD
	public function index()
	{
		if ($this->ion_auth->logged_in()) {
			$students = $this->student->getStudents();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
	        $this->mPageTitle = 'Students List';
	        $this->mViewData['students'] = $students;
	        $this->mBodyClass = 'student-list';
	        $this->render('student/list');
		}else {
			redirect('admin/login');
		}
		
	}

	// Create Frontend User
	public function create()
	{
		$form = $this->form_builder->create_form();
        $this->mViewData['form'] = $form;
        $this->mPageTitle = 'Create Student';
        $this->mBodyClass = 'create-new-section';	

        if ($this->ion_auth->logged_in()) {
            if (!empty($this->input->post())) {
                if ($this->form_validation->run() == TRUE) {
                	$this->student->setAttr($this->input->post());
                    $is_created = $this->student->create();
                    if ($is_created) {
                        $this->session->set_flashdata('success', 'Student created successfully.');
                        redirect('admin/student');
                    } else {
                        $this->session->set_flashdata('error', 'Something went wrong at our end. Please try again!');
                    }
                } else {
                    
                    $this->render('student/create');
                }

            } else {
                $this->render('student/create');
            }

        } else {
            redirect('admin/login');
        }
	}

	// User Groups CRUD
	public function group()
	{
		
	}

	// Frontend User Reset Password
	public function reset_password($user_id)
	{
		
	}
}
