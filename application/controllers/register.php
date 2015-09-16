<?php
class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		//load models
		$this->load->model('registration');
		$this->load->helper(array('form', 'url'));
		
	}

	public function index()
	{
		$data['title'] = 'Register';
		$data['goals'] = $this->registration->goals();

		$this->load->view('vpt/header_footer/register', $data);
		$this->load->view('vpt/register/home', $data);
		$this->load->view('vpt/header_footer/footer');
		
	}

	public function register_form()
	{
		$this->registration->register_f();

		redirect('/login');	
	}

}

