<?php
class Registration extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function register_f()
	{

		$weight = $this->input->post('weight');
		$bodyfat = $this->input->post('bfat');
		$afactor = $this->input->post('alevel');
		$stype = $this->input->post('stype');
		$bmr = 370 + ((21.6*($weight*(100-$bodyfat)))/100);
		$mcal = $bmr * $afactor * $stype;
		

		$data = array(
			'FName' => $this->input->post('fname'),
			'LName' => $this->input->post('lname'),
			'EMail' => $this->input->post('email'),
			'Password' => sha1($this->input->post('pwd').'Pp&ubBW3AMHVu%aS^R8dm7e#3Bp9tPmm^Wt@$e99rG!mRJdgAv9gSv*3px&v7Z*y5'),
			'Gender' => $this->input->post('gender'),
			'Weight' => $this->input->post('weight'),
			'BodyFat' => $this->input->post('bfat'),
			'AFactor' => $this->input->post('alevel'),
			'Goal_ID' => $this->input->post('tgoal'),
			'Meal_No' => $this->input->post('nmeals'),
			'Session_Times' => $this->input->post('sweek'),
			'BMR' => $bmr,
			'MCalories' => $mcal
			/*'EMail' => $this->input->post('email'),
			'FName' => $this->input->post('fname'),
			'LName' => $this->input->post('lname'),
			'EMail' => $this->input->post('email'),*/
		);

		return $this->db->insert('users', $data);
	}

	public function login()
	{

		$email = $this->input->post('email');
		$password = $this->input->post('pwd');

		
		$this->db->from('users');
		$this->db->where('EMail',$email);
		$this->db->where('Password',sha1($password.'Pp&ubBW3AMHVu%aS^R8dm7e#3Bp9tPmm^Wt@$e99rG!mRJdgAv9gSv*3px&v7Z*y5'));
		$this->db->limit(1);

		$query=$this->db->get();

		if($query->num_rows()==1)
		{

			return $query->row_array();
		}
		else
		{
			return false;
		}
	}


	public function goals()
	{
		//$this->db->order_by('gender, calories');
		$query = $this->db->get('goals');
		return $query->result_array();
	}
	

		
	}