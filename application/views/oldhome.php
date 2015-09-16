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
		
		
	}

	public function index()
	{
		$data['title'] = 'Home';
		$UID = $this->session->userdata('uid');
		$data['full_name'] = $this->session->userdata('full_name');

		$data['user'] = $this->calc_details->getuser($UID);
		$data['goal'] = $this->calc_details->getgoal($data['user']['Goal_ID']);
		$data['break_1'] = $this->calc_details->getbreakdown(1, $data['user']['Meal_No']);
		$data['break_2'] = $this->calc_details->getbreakdown(2, $data['user']['Meal_No']);
		$data['break_3'] = $this->calc_details->getbreakdown(3, $data['user']['Meal_No']);
		$data['break_4'] = $this->calc_details->getbreakdown(4, $data['user']['Meal_No']);
		$data['break_5'] = $this->calc_details->getbreakdown(5, $data['user']['Meal_No']);
		$data['break_6'] = $this->calc_details->getbreakdown(6, $data['user']['Meal_No']);

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

		$carbsextra = $data['Carb_Meal12'] - $data['Carb_Meal1'];



		$data['protein_f'] = $this->calc_details->get_protein($data['protein_b'],$data['Carb_Meal1'],$data['Fat_Meal1'],1);

		$Carb_Left = $data['Carb_Meal1'] - ($data['protein_f']['Carbs'] / 100 )* ($data['protein_b'] / $data['protein_f']['Protein'] * 100);
		$fatleft = $data['Fat_Meal1'] - (($data['protein_f']['Fat'] / 100 )* ($data['protein_b'] / $data['protein_f']['Protein'] * 100));
		$data['fatleft'] = $fatleft;
		$data['Carb_Left'] = $Carb_Left;

		if ($Carb_Left > 15) {
			$data['carb_f'] = $this->calc_details->get_carb($Carb_Left,$fatleft,1,$data['protein_f']['Protein_ID']);
			$data['Fat_Meal'] = $fatleft - (($data['carb_f']['Fat'] / 100 )* ($data['Carb_Meal1'] / $data['carb_f']['Carbs'] * 100));
			$data['Fat_Meal1'] = $data['Fat_Meal'];
			$Carb_Left = $Carb_Left - (($data['carb_f']['Carbs'] / 100 )* ($Carb_Left / $data['carb_f']['Carbs'] * 100));
			$data['Carb_Left1'] = $Carb_Left;
			$data['fat_f'] = $this->calc_details->get_fat($data['Fat_Meal'], $Carb_Left, $carbsextra,1);
		} else {
			$data['fat_f'] = $this->calc_details->get_fat($fatleft, $Carb_Left, $carbsextra,1);
			$data['Fat_Meal1'] = $fatleft;
		}
		



		


		


		//$this->calc_details->calculate_overall();
		$this->load->view('vpt/header_footer/header', $data);
		$this->load->view('vpt/member/home',$data);
		$this->load->view('vpt/header_footer/footer');
		//$this->output->enable_profiler(TRUE);
		
		
	}

	public function view($page)
	{
		if ( ! file_exists(APPPATH.'/views/vpt/member/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
	   
		    case "diet":
		    	$data['user'] = $this->calc_details->getuser(2);
		$data['goal'] = $this->calc_details->getgoal($data['user']['Goal_ID']);
		$data['break_1'] = $this->calc_details->getbreakdown(1);
		$data['break_2'] = $this->calc_details->getbreakdown(2);
		$data['break_3'] = $this->calc_details->getbreakdown(3);
		$data['break_4'] = $this->calc_details->getbreakdown(4);
		$data['break_5'] = $this->calc_details->getbreakdown(5);

		$weight = $data['user']['Weight'];
		$bodyfat = $data['user']['BodyFat'];
		$afactor = $data['user']['AFactor'];

		/*$weight = '75';
		$bodyfat = '18';
		$afactor = '1.2';*/


		$bmr = (370 + (21.6*$weight*(100-$bodyfat)))/100;
		$mcal = $bmr * $afactor;
		$calpd = $mcal + $data['goal']['Calories'];
		$protein_g = $weight * 3;
		$protein_c = $protein_g * 4;
		$fat_c = $mcal / 4;
		$fat_g = $fat_c / 9;
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

		$data['protein_b'] = $protein_g / $data['user']['Meal_No'];
		$data['Carb_Meal1'] = $carbs_g * $data['break_1']['Carbs'];
		$data['Fat_Meal1'] = $fat_g * $data['break_1']['Fat'];

		$data['protein_f'] = $this->calc_details->get_protein($data['protein_b']);
		$data['carb_f'] = $this->calc_details->get_carb($data['Carb_Meal1']);
		$data['fat_f'] = $this->calc_details->get_fat($data['Fat_Meal1']);
				$data['title'] = 'Diet';
		        break;

		    case "training":
				$data['title'] = 'Training';
		        break;

		    case "support":
				$data['title'] = 'Support';
		        break;

		    default:
		    	$data['title'] = $page;
		}

		$this->load->view('vpt/header_footer/header', $data);
		$this->load->view('vpt/member/'.$page);
		$this->load->view('vpt/header_footer/footer');
	}
}

