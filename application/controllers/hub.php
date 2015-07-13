<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hub extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		//load models
		$this->load->model('calc_details');
		$this->load->helper(array('form', 'url'));

		$this->load->library('session');
      
        

        $logged_in = $this->session->userdata('logged_in');
        
        if($logged_in !== TRUE)
        {
            redirect('/login');
        }

        $this->week = $this->session->userdata('current_week');
        $this->train_id = $this->session->userdata('train_id');
        $this->goal_id = $this->session->userdata('goal_id');
        $this->session_times = $this->session->userdata('session_times');
		
		
	}

	public function index()
	{
		$data['title'] = 'Home';
		$UID = $this->session->userdata('uid');
		$data['full_name'] = $this->session->userdata('full_name');
		$data['current_week'] = $this->week;

		$data['user'] = $this->calc_details->getuser($UID);
		$data['goal'] = $this->calc_details->getgoal($data['user']['Goal_ID']);
		
		$weight = $data['user']['Weight'];
		$bodyfat = $data['user']['BodyFat'];
		
		$this->load->view('vpt/header_footer/header', $data);
		$this->load->view('vpt/member/home',$data);
		$this->load->view('vpt/header_footer/footer');
		//$this->output->enable_profiler(TRUE);
		
		
	}

	public function training($week = 1)
	{

		$data['title'] = 'Training';
		$data['week'] = $week;
		$data['current_week'] = $this->week;
		$training_id = $this->calc_details->get_training_id($this->goal_id,$this->session_times);
		$data['activity'] = $this->calc_details->get_training($training_id,$week);

		$this->load->view('vpt/header_footer/header', $data);
		$this->load->view('vpt/member/training',$data);
		$this->load->view('vpt/header_footer/footer');
	}

	public function diet($week = 1)
	{
		if ($week > $this->week+2) {
			# run confirmation function
			echo "blah";
		} else {

			$UID = $this->session->userdata('uid');
			$data['user'] = $this->calc_details->getuser($UID);
			$data['train_id'] = $this->train_id;
			$data['total_meal'] = $data['user']['Meal_No'];

			$data['title'] = 'Diet';
			$data['week'] = $week;
			$data['current_week'] = $this->week;
			$data['session_times'] = $this->session_times;

			$this->load->view('vpt/header_footer/header', $data);
			$this->load->view('vpt/member/diet',$data);
			$this->load->view('vpt/header_footer/footer');

		}
	}

	public function getex($ex)
	{
		$data['exercise'] = $this->calc_details->get_exercise($ex);
		$this->load->view('vpt/member/ajax/exercise',$data);
	}

	public function getmeal($meal, $parent = 'ajax')
	{
		$split = explode('-', $meal);
		$meal = $split[0];

		$UID = $this->session->userdata('uid');
		$data['user'] = $this->calc_details->getuser($UID);

		$data['meal'] = $meal;
		
		$data['total_meal'] = $data['user']['Meal_No'];
		
		$data['goal'] = $this->calc_details->getgoal($data['user']['Goal_ID']);
		$data['break_1'] = $this->calc_details->getbreakdown($meal, $data['user']['Meal_No'],$this->train_id);
		

		$weight = $data['user']['Weight'];
		$bodyfat = $data['user']['BodyFat'];
		$afactor = $data['user']['AFactor'];
		
		$bmr = $data['user']['BMR'];
		$mcal = $data['user']['MCalories'];

		/*
			//for everyone
			$mcal = $mcal * (if endormorp 1 if mesomorph 1.1 if ectomorph 1.25)
			//for bulking male weeks 1-4
			$calpd = $mcal + (if endormorp 50 if mesomorph 75 if ectomorph 100)
			//for bulking male weeks 5-8
			//recalculate bmr and mcal with new weight = weight + 1
			$calpd = $mcal + (if endormorp 100 if mesomorph 150 if ectomorph 200)
			//for bulking male weeks 5-8
			//recalculate bmr and mcal with new weight = weight + 150
			$calpd = $mcal + (if endormorp 150 if mesomorph 225 if ectomorph 300)
		*/
		$calpd = $mcal + $data['goal']['Calories'];

		//for bulking male
		$protein_g = $weight * 3;
		$protein_c = $protein_g * 4;

		//for bulking male
		$fat_c = $mcal / 4; //(if mesomorph / 5)
		$fat_g = $fat_c / 9;

		//for every goal
		$carbs_c = $calpd - $protein_c - $fat_c;
		$carbs_g = $carbs_c / 4;

		$data['bmr'] = $bmr;
		$data['mcal'] = $mcal;
		$data['calpd'] = $calpd;
		$data['protein_g'] = $protein_g;
		$data['protein_c'] = $protein_c;
		$data['fat_c'] = $fat_c;
		$data['fat_g'] = $fat_g;
		$data['carbs_c'] = $carbs_c;
		$data['carbs_g'] = $carbs_g;

		$data['protein_b1'] = $protein_g / $data['user']['Meal_No'];
		$data['protein_b'] = $protein_g / $data['user']['Meal_No'];
		$data['Carb_Meal12'] = $carbs_g * $data['break_1']['Carbs'];
		$data['Carb_Meal1'] = $carbs_g * $data['break_1']['Carbs'];
		$data['Fat_Meal1'] = $fat_g * $data['break_1']['Fat'];

		$data['protein_b'] = $data['protein_b'] * 0.9;
		$data['Carb_Meal1'] = $data['Carb_Meal1'] * 0.9;

		if ($parent == 'ajax') {
			$check = $this->calc_details->check_meal($UID,$split['2'],$split['1'],$meal);
		} else {
			$check = FALSE;
		}
		

		if ($check) {
			$data['protein_f']['Name'] = $check['Protein_Name'];
			$data['carb_f']['Name'] = $check['Carb_Name'];
			$data['fat_f']['Name'] = $check['Fat_Name'];
			$data['protein_f']['Protein'] = $check['Protein_Grams'];
			$data['carb_f']['Carbs'] = $check['Carb_Grams'];
			$data['fat_f']['Fat'] = $check['Fat_Grams'];
		} else {

			$carbsextra = $data['Carb_Meal12'] - $data['Carb_Meal1'];


			$carbs = '';
			$pass_carbs_threshold = FALSE;

			$data['protein_f'] = $this->calc_details->get_protein($data['protein_b'],$data['Carb_Meal1'],$data['Fat_Meal1'],$meal);
			$Carb_Left = $data['Carb_Meal1'] - ($data['protein_f']['Carbs'] / 100 )* ($data['protein_b'] / $data['protein_f']['Protein'] * 100);
			$fatleft = $data['Fat_Meal1'] - (($data['protein_f']['Fat'] / 100 )* ($data['protein_b'] / $data['protein_f']['Protein'] * 100));
			$data['fatleft'] = $fatleft;
			$data['Carb_Left'] = $Carb_Left;

			if ($Carb_Left > 15) {
				$pass_carbs_threshold = TRUE;
				$data['carb_f'] = $this->calc_details->get_carb($Carb_Left,$fatleft,$meal,$data['protein_f']['Protein_ID']);
				
				if (!empty($data['carb_f'])) {
					$carbs = $data['carb_f']['Name'];
					$data['Fat_Meal'] = $fatleft - (($data['carb_f']['Fat'] / 100 )* ($data['Carb_Meal1'] / $data['carb_f']['Carbs'] * 100));
					$data['Fat_Meal1'] = $data['Fat_Meal'];
					$Carb_Left = $Carb_Left - (($data['carb_f']['Carbs'] / 100 )* ($Carb_Left / $data['carb_f']['Carbs'] * 100));
					$data['Carb_Left1'] = $Carb_Left;
					$data['fat_f'] = $this->calc_details->get_fat($data['Fat_Meal'], $Carb_Left, $carbsextra,1);
				}
				
			} else {
				if ($data['Fat_Meal1'] > 5) {
					$data['fat_f'] = $this->calc_details->get_fat($fatleft, $Carb_Left, $carbsextra,1);
					$data['Fat_Meal1'] = $fatleft;
				}
				
			}

			while ($carbs == '' && $data['break_1']['Carbs'] > 0 && $pass_carbs_threshold) {
				$data['protein_f'] = $this->calc_details->get_protein($data['protein_b'],$data['Carb_Meal1'],$data['Fat_Meal1'],$meal);
				$Carb_Left = $data['Carb_Meal1'] - ($data['protein_f']['Carbs'] / 100 )* ($data['protein_b'] / $data['protein_f']['Protein'] * 100);
				$fatleft = $data['Fat_Meal1'] - (($data['protein_f']['Fat'] / 100 )* ($data['protein_b'] / $data['protein_f']['Protein'] * 100));
				$data['fatleft'] = $fatleft;
				$data['Carb_Left'] = $Carb_Left;

				if ($Carb_Left > 15) {
					$pass_carbs_threshold = TRUE;
					$data['carb_f'] = $this->calc_details->get_carb($Carb_Left,$fatleft,$meal,$data['protein_f']['Protein_ID']);
					
					if (!empty($data['carb_f'])) {
						$carbs = $data['carb_f']['Name'];
						$data['Fat_Meal'] = $fatleft - (($data['carb_f']['Fat'] / 100 )* ($data['Carb_Meal1'] / $data['carb_f']['Carbs'] * 100));
						$data['Fat_Meal1'] = $data['Fat_Meal'];
						$Carb_Left = $Carb_Left - (($data['carb_f']['Carbs'] / 100 )* ($Carb_Left / $data['carb_f']['Carbs'] * 100));
						$data['Carb_Left1'] = $Carb_Left;
						$data['fat_f'] = $this->calc_details->get_fat($data['Fat_Meal'], $Carb_Left, $carbsextra,1);
					}
					
				} else {
					if ($data['Fat_Meal1'] > 5) {
						$data['fat_f'] = $this->calc_details->get_fat($fatleft, $Carb_Left, $carbsextra,1);
						$data['Fat_Meal1'] = $fatleft;
					}
					
				}
			}

		}
		

		if ($parent == 'make') {
			return $data;
		} else {
			$this->load->view('vpt/member/meal',$data);
		}
		
		//$this->output->enable_profiler(TRUE);
	}

	public function makemeal()
	{
		$UID = $this->session->userdata('uid');
		$user = $this->calc_details->getuser($UID);
		$h = $user['Current_Week'];
		$h_max = $h + 2;

		while ( $h <= $h_max) {
			$i = 1;
		
			while ( $i <= 7) {
				$j = 1;
				while ( $j <= $user['Meal_No']) {
					if ($user['Train_ID'] == $j) {

						$k = 11;
		            } elseif($user['Train_ID'] + 1 == $j) {

		                $k = 12;
		                    
		                } else {
		                	
		                	$k = $j;
		                  
		                }
						$data = $this->getmeal($k,'make');
						$this->calc_details->save_meal($data,$i,$k,$h);
						//print_r($data);
						$j++;
				}	
				$i++;
			}
			$h++;
		}
		
		$this->output->enable_profiler(TRUE);
	}
}

