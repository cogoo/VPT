<?php
class Calc_details extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


	public function calculate_overall()
	{


		
		
	}

	public function getgoal($id)
	{

		$this->db->where('Goal_ID', $id);
		$query = $this->db->get('goals');

		return  $query->row_array();
		
	}

	public function get_training_id($goal,$session)
	{
		//probably pass session times aswell
		$this->db->where('Goal_ID', $goal);
		$this->db->where('Session_Times', $session);
		$query = $this->db->get('training');

		return  $query->row()->Training_ID;
	}

	public function get_training($training_id,$week)
	{

		//$train id variable has to be goal id .. i think

		$this->db->where('Training_ID', $training_id);
		$this->db->where('Week', $week);
		$this->db->order_by('Order');
		
		$query = $this->db->get('workout');

		return  $query->result_array();
		
	}

	public function get_exercise($ex)
	{

		$this->db->where('WorkOut_ID', $ex);
		
		$query = $this->db->get('exercise');

		return  $query->result_array();
		
	}

	public function getbreakdown($meal,$t_meal,$train_id)
	{

		$this->db->where('Meal_No', $meal);
		$this->db->where('No_Meals', $t_meal);
		$this->db->where('Train_ID', $train_id);
		$query = $this->db->get('cal_breakdown');

		return  $query->row_array();
		
	}

	
	public function getuser($id)
	{

		$this->db->where('User_ID', $id);
		$query = $this->db->get('users');

		return  $query->row_array();
		
	}

	public function get_protein($id,$carb,$fat,$meal_type,$hate)
	{

		$this->db->select('Linked_Protein');
		$this->db->where('User_ID',$this->session->userdata('uid'));
		$this->db->where('Linked_Protein <>','');
		$query = $this->db->get('Allergy');
		$allergy_array = $query->result_array();

		$this->db->_protect_identifiers = FALSE;
		$meal = "Meal_type like '%,".$meal_type.",%'";
		$min = 'Min <= ('.$id.' / Protein * 100)';
		$max = 'Max >= ('.$id.' / Protein * 100)';
		$carbs = '(Carbs / 100 ) * ('.$id.' / Protein * 100) <= '.$carb;
		if ($fat < 5) {
			$fat = '(Fat / 100 ) * ('.$id.' / Protein * 100) <= 5';
		} else {
			$fat = '(Fat / 100 ) * ('.$id.' / Protein * 100) <= '.$fat;
		}

		if ($hate) {
			foreach ($allergy_array as $allergy) {
				foreach ($allergy as $key) {
					$a_where = 'Protein_ID not in (0'.$key.'0)';
					$this->db->where($a_where);
				}
				
			}
		}
		
		
		$this->db->where($min);
		$this->db->where($meal);
		$this->db->where($max);
		$this->db->where($carbs);
		$this->db->where($fat);
		$this->db->order_by('protein_id','RANDOM');
		$this->db->limit(1);
		$this->db->_protect_identifiers = FALSE;
		$query = $this->db->get('protein');

		return  $query->row_array();
	}

	public function get_carb($id,$fatleft,$meal_type,$protein)
	{
		$min = 'Min <= ('.$id.' / Carbs * 100)';
		if ($fatleft < 0) {
			$fat = '(Fat / 100 ) * ('.$id.' / Carbs * 100) <= 5';
		} else {
			$fat = '(Fat / 100 ) * ('.$id.' / Carbs * 100) <= '.$fatleft;
		}
		$meal = "Meal_type like '%,".$meal_type.",%'";
		$link = "Linked_Foods like '%,".$protein.",%'";
		$this->db->where($min);
		$this->db->where($link);
		$this->db->where($fat);
		$this->db->where($meal);
		$this->db->order_by('carb_id','RANDOM');
		$this->db->limit(1);
		$query = $this->db->get('carbs');

		return  $query->row_array();
	}

	public function get_fat($id,$carbsleft,$carbsextra)
	{
		$min = 'Min <= ('.$id.' / Fat * 100)';
		//$fat = '(Fat / 100 ) * ('.$id.' / Fat * 100) <= '.$id;
		$fat = '(Carbs / 100 ) * ('.$id.' / Fat * 100) <= '.($carbsleft+$carbsextra);
		//$meal = "Meal_type like '%".$meal_type."%'";
		$this->db->where($fat);
		$this->db->where($min);
		//$this->db->where($meal);
		$this->db->order_by('fat_id','RANDOM');
		$this->db->limit(1);
		$query = $this->db->get('fat');

		return  $query->row_array();
	}

	public function get_veg($type = 'all')
	{
		if ($type == 'green') {
			$this->db->where('meal_type','green');
		}
		$this->db->order_by('veg_id','RANDOM');
		$this->db->limit(1);
		$query = $this->db->get('veg');

		return  $query->row_array();

	}

	public function save_meal($data,$i,$j,$h)
	{
		if (isset($data['carb_f']['Name'])) {
			$carb = $data['carb_f']['Name'];
			$carb_g = $data['carb_f']['Carbs'];
		} else {
			$carb = $carb_g = NULL;
		}

		if (isset($data['fat_f']['Name'])) {
			$fat = $data['fat_f']['Name'];
			$fat_g = $data['fat_f']['Fat'];
		} else {
			$fat = $fat_g = NULL;
		}

		if (isset($data['veg_f']['Name'])) {
			$veg = $data['veg_f']['Name'];
		} else {
			$veg = NULL;
		}

		$ins = array(
			'User_ID' => $data['user']['User_ID'],
			'Week' => $h,
			'Day' => $i,
			'Meal_No' => $j,
			'Protein_Name' => $data['protein_f']['Name'],
			'Protein_Grams' => $data['protein_f']['Protein'],
			'Carb_Name' => $carb,
			'Carb_Grams' => $carb_g,
			'Fat_Name' => $fat,
			'Fat_Grams' => $fat_g,
			'Green_Veg' => $veg,
			'Failed_Meal' => $data['hate']
		);

		return $this->db->insert('users_meals', $ins);
	}

	public function delete_meal($data,$day,$meal,$week)
	{
		$this->db->where('User_ID',$data['user']['User_ID']);
		$this->db->where('Week',$week);
		$this->db->where('Day',$day);
		$this->db->where('Meal_No',$meal);
		$this->db->delete('users_meals');
	}

	public function check_meal($a,$b,$c,$d)
	{
		$this->db->where('User_ID',$a);
		$this->db->where('Week',$b);
		$this->db->where('Day',$c);
		$this->db->where('Meal_No',$d);
		$query = $this->db->get('users_meals');
		return $query->row_array();
	}

	public function complete_week($week)
	{
		$data = array(
			'Current_Week' => $week + 1
		);

		$this->db->where('User_ID',$this->session->userdata('uid'));
		$this->db->update('users', $data);
		return $week + 1;
	}

	public function complete_day($day)
	{
		$data = array(
			'Completed_Day' => $day
		);

		$this->db->where('User_ID',$this->session->userdata('uid'));
		$this->db->update('users', $data);
	}

	public function max_meal($UID)
	{
		$this->db->select_max('week', 'max_week');
		$this->db->where('User_ID',$UID);
		$query = $this->db->get('users_meals');
		return $query->row()->max_week;
	}
}