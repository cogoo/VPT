<?php
class Login extends CI_Controller {

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
		//$data['goals'] = $this->registration->goals();

		$this->load->view('vpt/header_footer/header_new', $data);
		$this->load->view('vpt/login/home_new', $data);
		$this->load->view('vpt/header_footer/footer_new');
		//$this->output->enable_profiler(TRUE);
		
		
	}

	public function check_user()
	{
		$result = $this->registration->login();
		$email = $result['EMail'];
		$name = $result['FName'];
		$full_name = $result['FName'].' '. $result['LName'];
		$UID = $result['User_ID'];
		$current_week = $result['Current_Week'];
		$train_id = $result['Train_ID'];
		$goal_id = $result['Goal_ID'];
		$session_times = $result['Session_Times'];
		$first_login = $result['First_Login'];

		if($result)
		{
			$newdata = array(
               'name'  => $name,
               'email'     => $email,
               'uid'     => $UID,
               'full_name'     => $full_name,
               'current_week'     => $current_week,
               'train_id'     => $train_id,
               'goal_id'     => $goal_id,
               'session_times'     => $session_times,
               'logged_in' => TRUE,
               'first_login' => $first_login
               );
        	$this->session->set_userdata($newdata);
        	$data = true;
			
		} else {
			$data = false;
		}

		$this->output->set_output(json_encode($data));
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/login');
		
	}

}

