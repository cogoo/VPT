<?php
class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		//load models
		$this->load->model('registration');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		
	}

	public function index()
	{
		$data['title'] = 'Login / Register';

		$this->load->view('vpt/header_footer/header_new', $data);
		$this->load->view('vpt/register/home_new', $data);
		$this->load->view('vpt/header_footer/footer_new');
		
	}

	public function register2()
	{
		$data['title'] = 'Login / Register';

		$this->load->view('vpt/header_footer/header_new', $data);
		$this->load->view('vpt/register/register2', $data);
		$this->load->view('vpt/header_footer/footer_new');
		
	}

	public function register3()
	{
		$this->load->model('calc_details');
		$data['title'] = 'Login / Register';
		$UID = $this->session->userdata('uid');
		$user = $this->calc_details->getuser($UID);
		$data['goals'] = $this->registration->goals($user['Gender']);

		$this->load->view('vpt/header_footer/header_new', $data);
		$this->load->view('vpt/register/register3', $data);
		$this->load->view('vpt/header_footer/footer_new');
		
	}

	public function register4()
	{
		$data['title'] = 'Login / Register';

		$this->load->view('vpt/header_footer/header_new', $data);
		$this->load->view('vpt/register/register4', $data);
		$this->load->view('vpt/header_footer/footer_new');
		
	}

	public function register_form()
	{
		$this->registration->register_f();

		redirect('/login');	
	}

	public function register_part1_form()
	{
		$id = $this->registration->register_part1();
		$this->session->set_userdata('uid', $id);

		redirect('/register/2');	
	}

	public function register_part2_form()
	{
		$this->registration->register_part2();
		redirect('/register/3');	
	}

	public function register_part4_form()
	{
		$this->registration->register_part4();
		redirect('/register/complete');	
	}

}

