<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['register/4'] = "register/register4";
$route['register/3'] = "register/register3";
$route['register/2'] = "register/register2";
$route['getdiet/(:num)/(:num)'] = "hub/getdiet/$1/$2";
$route['changefavmeal/(:any)'] = "hub/change_fav_meal/$1";
$route['changemeal/(:any)'] = "hub/change_meal/$1";
$route['day/(:any)'] = "hub/mark_day_complete/$1";
$route['complete/(:any)'] = "hub/mark_as_complete/$1";
$route['diet/(:num)'] = "hub/diet/$1";
$route['settings'] = "hub/settings";
$route['training/(:num)'] = "hub/training/$1";
$route['getmobilemeal/(:any)'] = "hub/get_mobile_meal/$1";
$route['getmeal/(:any)'] = "hub/getmeal/$1";
$route['gettraining/(:num)/(:num)/(:any)'] = "hub/getex/$1/$2/$3";
$route['logout'] = "login/logout";
$route['login/check_user'] = "login/check_user";
$route['login'] = "login";
$route['register'] = "register";
$route['home'] = "hub";

$route['default_controller'] = "hub";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */