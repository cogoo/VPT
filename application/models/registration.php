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

		switch ($this->input->post('tgoal')) {
			case 1:
				switch ($stype) {
					case 1:
						$calpd = $mcal + 50;
						break;
					case 1.1:
						$calpd = $mcal + 75;
						break;
					case 1.25:
						$calpd = $mcal + 100;
						break;
				}
				break;
			
			case 2:
				switch ($stype) {
					case 1:
						$calpd = $mcal * 0.75;
						break;
					case 1.1:
						$calpd = $mcal * 0.65;
						break;
					case 1.25:
						$calpd = $mcal * 0.85;
						break;
				}
				break;

			case 3:
				switch ($stype) {
					case 1:
						$calpd = $mcal * 0.875;
						break;
					case 1.1:
						$calpd = $mcal * 0.825;
						break;
					case 1.25:
						$calpd = $mcal * 0.925;
						break;
				}
				break;

			case 4:
				switch ($stype) {
					case 1:
						$calpd = $mcal * 0.75;
						break;
					case 1.1:
						$calpd = $mcal * 0.65;
						break;
					case 1.25:
						$calpd = $mcal * 0.85;
						break;
				}
				break;

			case 5:
				switch ($stype) {
					case 1:
						$calpd = $mcal * 0.875;
						break;
					case 1.1:
						$calpd = $mcal * 0.825;
						break;
					case 1.25:
						$calpd = $mcal * 0.925;
						break;
				}
				break;
		}

		/*
			
			//for bulking male weeks 1-4
			$calpd = $mcal + (if endormorp 50 if mesomorph 75 if ectomorph 100)
			//for bulking male weeks 5-8
			//recalculate bmr and mcal with new weight = weight + 1
			$calpd = $mcal + (if endormorp 100 if mesomorph 150 if ectomorph 200)
			//for bulking male weeks 9-12
			//recalculate bmr and mcal with new weight = weight + 150
			$calpd = $mcal + (if endormorp 150 if mesomorph 225 if ectomorph 300)

			//for lose fat male weeks 1-4 == female tone up
			$calpd = $mcal + (if meso -25% of mcal, if endo - 35% if ecto - 15%)
			//for weeks 5-8
			- 100 for everyone
			//for weeks 9-12
			-200 fro everyone

			for male / female increase fitness
			$calpd = $mcal + (if meso -12.5% of mcal, if endo - 17.5% if ecto - 7.5%)
			//for weeks 5-8
			- 50 for everyone
			//for weeks 9-12
			-100 fro everyone

			*** when making meal, for protein .. (if max is reached) .. pick two protein sources 


		*/
		

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
			'MCalories' => $mcal,
			'CaloriesPerDay' => $calpd
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