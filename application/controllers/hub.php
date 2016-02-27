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

        //the current week
        $this->week = $this->session->userdata('current_week');
        //training time
        $this->train_id = $this->session->userdata('train_id');
        //users goal
        $this->goal_id = $this->session->userdata('goal_id');
        //how many times to train a week
        $this->session_times = $this->session->userdata('session_times');

        if ($this->session->userdata('first_login')== 0) {
        	$this->makemeal();
			$this->calc_details->change_initial();
			$this->session->unset_userdata('first_login');
			$this->session->set_userdata('first_login', 1);
        }
		
		
	}

	/*public function index()
	{
		$data['title'] = 'Home';
		$UID = $this->session->userdata('uid');
		$data['full_name'] = $this->session->userdata('full_name');
		$data['current_week'] = $this->week;

		$data['user'] = $this->calc_details->getuser($UID);
		$data['goal'] = $this->calc_details->getgoal($data['user']['Goal_ID']);
		$data['days_meals'] = $this->calc_details->get_days_meals();
		
		$weight = $data['user']['Weight'];
		$bodyfat = $data['user']['BodyFat'];
		
		$this->load->view('vpt/header_footer/header', $data);
		$this->load->view('vpt/member/home',$data);
		$this->load->view('vpt/header_footer/footer');
		//$this->output->enable_profiler(TRUE);
		
		
	}*/

	public function index()
	{
		$data['title'] = 'Home';
		$UID = $this->session->userdata('uid');
		$data['full_name'] = $this->session->userdata('full_name');
		$data['current_week'] = $this->week;

		$data['user'] = $this->calc_details->getuser($UID);
		$data['goal'] = $this->calc_details->getgoal($data['user']['Goal_ID']);
		//$data['days_meals'] = $this->calc_details->get_days_meals();

		$data['days_meals'] = $this->calc_details->get_days_meals_mobile(date('N'),$this->week);
		
		$weight = $data['user']['Weight'];
		$bodyfat = $data['user']['BodyFat'];
		
		$this->load->view('vpt/header_footer/header_new', $data);
		$this->load->view('vpt/member/home_new',$data);
		$this->load->view('vpt/header_footer/footer_new');
		//$this->output->enable_profiler(TRUE);
		
		
	}

	public function training($week = 1)
	{

		if ($this->session_times == 3) {
            $rest = array("2", "4", "6", "7");
        }

        if ($this->session_times == 4) {
            $rest = array("3", "5", "7");
        }

        if ($this->session_times == 5) {
            $rest = array("3", "6");
        }

        if ($this->session_times == 6) {
            $rest = array("4");
        }

		$this->session->set_userdata('week_current', $week);
		$data['title'] = 'Training';
		$data['week'] = $week;
		$UID = $this->session->userdata('uid');
		$data['user'] = $this->calc_details->getuser($UID);
		$data['current_week'] = $this->week;
		$training_id = $this->calc_details->get_training_id($this->goal_id,$this->session_times);
		$data['activity'] = $this->calc_details->get_training($training_id,$week);
		$data['rest'] = $rest;

		$this->load->view('vpt/header_footer/header_new', $data);
		$this->load->view('vpt/member/training_new',$data);
		$this->load->view('vpt/header_footer/footer_new');
	}

	/*

	//old training

	public function training($week = 1)
	{

		$this->session->set_userdata('week_current', $week);
		$data['title'] = 'Training';
		$data['week'] = $week;
		$UID = $this->session->userdata('uid');
		$data['user'] = $this->calc_details->getuser($UID);
		$data['current_week'] = $this->week;
		$training_id = $this->calc_details->get_training_id($this->goal_id,$this->session_times);
		$data['activity'] = $this->calc_details->get_training($training_id,$week);

		$this->load->view('vpt/header_footer/header', $data);
		$this->load->view('vpt/member/training',$data);
		$this->load->view('vpt/header_footer/footer');
	}*/

	public function diet($week = 1)
	{
		if ($week > $this->week+1) {
			$data['title'] = 'No access';
			$data['week'] = $week;
			$data['current_week'] = $this->week;
			$data['week_needed'] = $week - 2;
			$UID = $this->session->userdata('uid');
			$data['user'] = $this->calc_details->getuser($UID);
			$this->load->view('vpt/header_footer/header', $data);
			$this->load->view('vpt/member/no_access',$data);
			$this->load->view('vpt/header_footer/footer');
		} else {

			$this->session->set_userdata('week_current', $week);

			$UID = $this->session->userdata('uid');
			$data['user'] = $this->calc_details->getuser($UID);
			$data['train_id'] = $this->train_id;
			$data['total_meal'] = $data['user']['Meal_No'];
			$data['completed_day'] = $data['user']['Completed_Day'];

			$data['title'] = 'Diet';
			$data['week'] = $week;
			$data['current_week'] = $this->week;
			$data['session_times'] = $this->session_times;

			$this->load->view('vpt/header_footer/header_new', $data);
			$this->load->view('vpt/member/diet_new',$data);
			$this->load->view('vpt/header_footer/footer_new');

		}
	}

	public function getdiet($week,$day)
	{
		$data['title'] = 'Diet';
		$data['week'] = $week;
		$data['day'] = $day;
		$UID = $this->session->userdata('uid');
		$data['user'] = $this->calc_details->getuser($UID);
		$data['completed_day'] = $data['user']['Completed_Day'];
		$data['current_week'] = $this->week;
		$data['days_meals'] = $this->calc_details->get_days_meals_mobile($day,$week);

		$this->load->view('vpt/header_footer/header_new', $data);
		$this->load->view('vpt/member/diet_new_page',$data);
		$this->load->view('vpt/header_footer/footer_new');

	}

	public function getex($week,$ex,$name)
	{
		$data['title'] = 'Training';
		$data['week'] = $week;
		$data['current_week'] = $this->week;
		$data['exercise'] = $this->calc_details->get_exercise($ex);
		$data['act_name'] = $name;

		$this->load->view('vpt/header_footer/header_new', $data);
		$this->load->view('vpt/member/training_new_page',$data);
		$this->load->view('vpt/header_footer/footer_new');

	}


	/*
	//old exercise function
	public function getex($ex)
	{
		$data['exercise'] = $this->calc_details->get_exercise($ex);
		$this->load->view('vpt/member/ajax/exercise',$data);
	} */

	/*

	//old diet function

	public function diet($week = 1)
	{
		if ($week > $this->week+1) {
			$data['title'] = 'No access';
			$data['week'] = $week;
			$data['current_week'] = $this->week;
			$data['week_needed'] = $week - 2;
			$UID = $this->session->userdata('uid');
			$data['user'] = $this->calc_details->getuser($UID);
			$this->load->view('vpt/header_footer/header', $data);
			$this->load->view('vpt/member/no_access',$data);
			$this->load->view('vpt/header_footer/footer');
		} else {

			$this->session->set_userdata('week_current', $week);

			$UID = $this->session->userdata('uid');
			$data['user'] = $this->calc_details->getuser($UID);
			$data['train_id'] = $this->train_id;
			$data['total_meal'] = $data['user']['Meal_No'];
			$data['completed_day'] = $data['user']['Completed_Day'];

			$data['title'] = 'Diet';
			$data['week'] = $week;
			$data['current_week'] = $this->week;
			$data['session_times'] = $this->session_times;

			$this->load->view('vpt/header_footer/header', $data);
			$this->load->view('vpt/member/diet',$data);
			$this->load->view('vpt/header_footer/footer');

		}
	}
	*/

	

	public function get_mobile_meal($days)
	{
		$split = explode('-', $days);
		$day = $split[0];
		$week = $split[1];

		$data['days_meals'] = $this->calc_details->get_days_meals_mobile($day,$week);
		$this->load->view('vpt/member/ajax/mobile_meal',$data);
	}

	public function makemeal($initial = 'YES')
	{

		//calculate rest days
		if ($this->session_times == 3) {
	        $rest = array("2", "4", "6", "7");
	    }

	    if ($this->session_times == 4) {
	        $rest = array("3", "5", "7");
	    }

	    if ($this->session_times == 5) {
	        $rest = array("3", "6");
	    }

	    if ($this->session_times == 6) {
	        $rest = array("4");
	    }

		$UID = $this->session->userdata('uid');
		$user = $this->calc_details->getuser($UID);

		//yes if creating after registration process .. will create meals from week 1 - 2
		if ($initial == 'YES') {
			$h = $user['Current_Week'];
			$h_max = $h + 1;
		} elseif ($initial == 'NO')
			{
				//if not initial .. meaning a week had been marked as completed .. creates meal for the max meal week + 1
				$h = $h_max = $this->calc_details->max_meal($UID) + 1;
			}
		

		while ( $h <= $h_max && $h_max < 13) {
			$i = 1;
		
			while ( $i <= 7) {
				//i = days
				$j = 1;
				//check if its a rest day
				if (in_array($i, $rest)) {
					while ( $j <= $user['Meal_No']) {
			                	
		                $k = $j.'-'.$i;
		                  
						$data = $this->getmeal($k,'make');
						$this->calc_details->save_meal($data,$i,$k,$h);
						$j++;
					}

				} else {
					while ( $j <= $user['Meal_No']) {
						if ($user['Train_ID'] == $j) {
							//if its the first meal and training after meal 1 .. meal 1 has to be sent as 13
							if ($j == 1) {
								$k = '13-'.$i;
							} else {
								//11 is pre-workout meal
								$k = '11-'.$i;
							}
							
			            } elseif($user['Train_ID'] + 1 == $j) {
			            	//12 is post workout meal
			                $k = '12-'.$i;
			                    
			                } else {
			                	
			                	$k = $j.'-'.$i;
			                  
			                }
			                //retrieve the meal and save it
							$data = $this->getmeal($k,'make');
							$this->calc_details->save_meal($data,$i,$k,$h);
							//print_r($data);
							$j++;
					}
				}
					
				$i++;
			}
			$h++;
		}
		
		$this->output->enable_profiler(TRUE);
	}

	public function getmeal($meal, $parent = 'ajax')
	{
		//get rest arrays
		if ($this->session_times == 3) {
	        $rest = array("2", "4", "6", "7");
	    }

	    if ($this->session_times == 4) {
	        $rest = array("3", "5", "7");
	    }

	    if ($this->session_times == 5) {
	        $rest = array("3", "6");
	    }

	    if ($this->session_times == 6) {
	        $rest = array("4");
	    }

		//$meal in the form 11-1-2 (meal number - day - week)
		$split = explode('-', $meal);
		$meal = $split[0];
		$UID = $this->session->userdata('uid');

		$data['user'] = $this->calc_details->getuser($UID);
		$data['meal'] = $meal;
		$data['total_meal'] = $data['user']['Meal_No'];
		$data['goal'] = $this->calc_details->getgoal($data['user']['Goal_ID']);

		//if its a rest day, send trainid as 0
		if (in_array($split[1], $rest)) {
			$trainid = 0;
		} else {
			$trainid = $this->train_id;
		}

		//get the breakdown for this scenario
		$data['break_1'] = $this->calc_details->getbreakdown($meal, $data['user']['Meal_No'],$trainid,$data['user']['Goal_ID']);
		
		$weight = $data['user']['Weight'];
		$bodyfat = $data['user']['BodyFat'];
		$afactor = $data['user']['AFactor'];
		$bmr = $data['user']['BMR'];
		$mcal = $data['user']['MCalories'];
		$calpd = $data['user']['CaloriesPerDay'];

		//calculating protein and fat breakdown
		switch ($data['user']['Goal_ID']) {
			case 1:
				//for bulking male
				$protein_g = $weight * 3;
				$protein_c = $protein_g * 4;

				$fat_c = $mcal / 4; 
				$fat_g = $fat_c / 9;
				break;

			case 2:
				//loose fat male
				$protein_g = ($calpd * 0.4)/4;
				$protein_c = ($calpd * 0.4);
				
				$fat_c = $calpd * 0.35; 
				$fat_g = $fat_c / 9;
				break;

			case 3:
				//increase fitness male
				$protein_g = ($calpd * 0.4)/4;
				$protein_c = ($calpd * 0.4);

				$fat_c = $calpd * 0.2; 
				$fat_g = $fat_c / 9;
				break;

			case 4:
				//tone up female
				$protein_g = ($calpd * 0.4)/4;
				$protein_c = ($calpd * 0.4);
				
				$fat_c = $calpd * 0.35; 
				$fat_g = $fat_c / 9;
				break;

			case 5:
				//increase fitness female
				$protein_g = ($calpd * 0.4)/4;
				$protein_c = ($calpd * 0.4);

				
				$fat_c = $calpd * 0.2; 
				$fat_g = $fat_c / 9;
				break;
		}
		

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

		//if this is an ajax call, go get the meal
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
			$data['veg_f']['Name'] = $check['Green_Veg']; 
			$data['hate'] = $check['Failed_Meal']; 
			$data['day'] = $check['Day']; 
			$data['week'] = $check['Week']; 
			$data['meal_no'] = $check['Meal_No']; 
		} else {

			//since we are only calculating to 90% .. carbs extra is the 10%
			$carbsextra = $data['Carb_Meal12'] - $data['Carb_Meal1'];

			$carbs = '';
			$pass_carbs_threshold = FALSE;
			$hate = TRUE;

			$loop = 0;
			while ((($carbs == '' && $data['break_1']['Carbs'] > 0 && $pass_carbs_threshold) || empty($data['protein_f'])) && $loop < 20) {
				if ($loop > 10) {
					$hate = FALSE;
				}

				$data['protein_f'] = $this->calc_details->get_protein($data['protein_b'],$data['Carb_Meal1'],$data['Fat_Meal1'],$meal,$hate);
				if (empty($data['protein_f'])) {
					$loop += 1;
					continue;
				}
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
					} else {
						$loop += 1;
						continue;
					}
					
				} else {
					$data['veg_f'] = $this->calc_details->get_veg();

					if ($data['Fat_Meal1'] > 5) {
						$data['fat_f'] = $this->calc_details->get_fat($fatleft, $Carb_Left, $carbsextra,1);
						$data['Fat_Meal1'] = $fatleft;
					}
					
				}

				if ($meal == 2 || $meal == 3 || $meal == 4 || $meal == 5) {
					$data['veg_f'] = $this->calc_details->get_veg('green');
				}
				$loop += 1;
			}

			if ($parent == 'ffave' && !$hate) {
				$data['hate'] = 3;
			} elseif($parent == 'ffave') {
				$data['hate'] = 2;
			} else {
				$data['hate'] = $hate;
			}

		}
		

		if ($parent == 'make' || $parent == 'change' || $parent == 'ffave') {
			return $data;
		} else {
			if ($split['2'] == $this->week && $split['1'] > $data['user']['Completed_Day']) {
				$data['change'] = TRUE;
			} else {
				$data['change'] = FALSE;
			}
			$this->load->view('vpt/member/diet_change_page',$data);
		}
		
		//$this->output->enable_profiler(TRUE);
	}

	//function to get a fav meal
	public function get_fav_meal($meal)
	{
		//get rest arrays
		if ($this->session_times == 3) {
	        $rest = array("2", "4", "6", "7");
	    }

	    if ($this->session_times == 4) {
	        $rest = array("3", "5", "7");
	    }

	    if ($this->session_times == 5) {
	        $rest = array("3", "6");
	    }

	    if ($this->session_times == 6) {
	        $rest = array("4");
	    }

		//$meal in the form 11-1-2 (meal number - day - week)
		$split = explode('-', $meal);
		$meal2 = $meal;
		$meal = $split[0];
		$UID = $this->session->userdata('uid');

		$data['user'] = $this->calc_details->getuser($UID);
		$data['meal'] = $meal;
		$data['total_meal'] = $data['user']['Meal_No'];
		$data['goal'] = $this->calc_details->getgoal($data['user']['Goal_ID']);

		//if its a rest day, send trainid as 0
		if (in_array($split[1], $rest)) {
			$trainid = 0;
		} else {
			$trainid = $this->train_id;
		}

		//get the breakdown for this scenario
		$data['break_1'] = $this->calc_details->getbreakdown($meal, $data['user']['Meal_No'],$trainid,$data['user']['Goal_ID']);
		
		$weight = $data['user']['Weight'];
		$bodyfat = $data['user']['BodyFat'];
		$afactor = $data['user']['AFactor'];
		$bmr = $data['user']['BMR'];
		$mcal = $data['user']['MCalories'];
		$calpd = $data['user']['CaloriesPerDay'];

		//calculating protein and fat breakdown
		switch ($data['user']['Goal_ID']) {
			case 1:
				//for bulking male
				$protein_g = $weight * 3;
				$protein_c = $protein_g * 4;

				$fat_c = $mcal / 4; 
				$fat_g = $fat_c / 9;
				break;

			case 2:
				//loose fat male
				$protein_g = ($calpd * 0.4)/4;
				$protein_c = ($calpd * 0.4);
				
				$fat_c = $calpd * 0.35; 
				$fat_g = $fat_c / 9;
				break;

			case 3:
				//increase fitness male
				$protein_g = ($calpd * 0.4)/4;
				$protein_c = ($calpd * 0.4);

				$fat_c = $calpd * 0.2; 
				$fat_g = $fat_c / 9;
				break;

			case 4:
				//tone up female
				$protein_g = ($calpd * 0.4)/4;
				$protein_c = ($calpd * 0.4);
				
				$fat_c = $calpd * 0.35; 
				$fat_g = $fat_c / 9;
				break;

			case 5:
				//increase fitness female
				$protein_g = ($calpd * 0.4)/4;
				$protein_c = ($calpd * 0.4);

				
				$fat_c = $calpd * 0.2; 
				$fat_g = $fat_c / 9;
				break;
		}
		
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

		//since we are only calculating to 90% .. carbs extra is the 10%
		$carbsextra = $data['Carb_Meal12'] - $data['Carb_Meal1'];

		$carbs = '';
		$pass_carbs_threshold = FALSE;
		$hate = TRUE;

		$loop = 0;
		while ((($carbs == '' && $data['break_1']['Carbs'] > 0 && $pass_carbs_threshold) || empty($data['protein_f'])) && $loop < 21) {

			if ($loop <= 10) {
				$data['protein_f'] = $this->calc_details->get_fav_protein($data['protein_b'],$data['Carb_Meal1'],$data['Fat_Meal1'],$meal);
				if (empty($data['protein_f'])) {
					$loop += 1;
					continue;
				}
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
					} else {
						$loop += 1;
						continue;
					}
					
				} else {
					$data['veg_f'] = $this->calc_details->get_veg();

					if ($data['Fat_Meal1'] > 5) {
						$data['fat_f'] = $this->calc_details->get_fat($fatleft, $Carb_Left, $carbsextra,1);
						$data['Fat_Meal1'] = $fatleft;
					}
					
				}

				if ($meal == 2 || $meal == 3 || $meal == 4 || $meal == 5) {
					$data['veg_f'] = $this->calc_details->get_veg('green');
				}
				$loop += 1;
			} elseif ($loop <= 20) {
				$data['protein_f'] = $this->calc_details->get_protein($data['protein_b'],$data['Carb_Meal1'],$data['Fat_Meal1'],$meal,TRUE);
				if (empty($data['protein_f'])) {
					$loop += 1;
					continue;
				}
				$Carb_Left = $data['Carb_Meal1'] - ($data['protein_f']['Carbs'] / 100 )* ($data['protein_b'] / $data['protein_f']['Protein'] * 100);
				$fatleft = $data['Fat_Meal1'] - (($data['protein_f']['Fat'] / 100 )* ($data['protein_b'] / $data['protein_f']['Protein'] * 100));
				$data['fatleft'] = $fatleft;
				$data['Carb_Left'] = $Carb_Left;

				if ($Carb_Left > 15) {
					$pass_carbs_threshold = TRUE;
					$data['carb_f'] = $this->calc_details->get_fav_carb($Carb_Left,$fatleft,$meal,$data['protein_f']['Protein_ID']);
					
					if (!empty($data['carb_f'])) {
						$carbs = $data['carb_f']['Name'];
						$data['Fat_Meal'] = $fatleft - (($data['carb_f']['Fat'] / 100 )* ($data['Carb_Meal1'] / $data['carb_f']['Carbs'] * 100));
						$data['Fat_Meal1'] = $data['Fat_Meal'];
						$Carb_Left = $Carb_Left - (($data['carb_f']['Carbs'] / 100 )* ($Carb_Left / $data['carb_f']['Carbs'] * 100));
						$data['Carb_Left1'] = $Carb_Left;
						$data['fat_f'] = $this->calc_details->get_fat($data['Fat_Meal'], $Carb_Left, $carbsextra,1);
					} else {
						$loop += 1;
						continue;
					}
					
				} else {
					$loop = 21;
					break;
					
				}

				if ($meal == 2 || $meal == 3 || $meal == 4 || $meal == 5) {
					$data['veg_f'] = $this->calc_details->get_veg('green');
				}
				$loop += 1;

			} 
		}

		$data['hate'] = $hate;

		if ($loop > 20) {
			$data = $this->getmeal($meal2, 'ffave');
		}
		return $data;
		
		//$this->output->enable_profiler(TRUE);
	}

	public function mark_as_complete($page)
	{
		$i = $this->session->userdata('current_week');
		$j = $this->session->userdata('week_current');
		while ( $i <= $j) {
			$week = $this->calc_details->complete_week($i);
			$this->makemeal('NO');
			$i++;
		}
		$this->calc_details->complete_day(0);

		$this->session->unset_userdata('current_week');
		$this->session->set_userdata('current_week', $week);
		redirect("/$page/$week");
	}

	public function mark_day_complete($day)
	{
		$this->calc_details->complete_day($day);
	}

	public function change_meal($id)
	{

		$data = $this->getmeal($id,'change');
		$split = explode('-', $id);
		$this->calc_details->delete_meal($data,$split[1],$split[0],$split[2]);
		$this->calc_details->save_meal($data,$split[1],$split[0],$split[2]);
		$this->getmeal($id,'ajax');
		//echo "r";
	}

	public function change_fav_meal($id)
	{

		$data = $this->get_fav_meal($id);
		$split = explode('-', $id);
		$this->calc_details->delete_meal($data,$split[1],$split[0],$split[2]);
		$this->calc_details->save_meal($data,$split[1],$split[0],$split[2]);
		$this->getmeal($id,'ajax');
	}
}

