<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|		$this->auth();

| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// This is login logout and register route 
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'login_controller/login/index';
$route['registration'] = 'login_controller/registration';
$route['registration/process_registration'] = 'login_controller/Registration/process_registration';
$route['logout'] = 'login_controller/login/logout';

// Dashboard
$route['dashboard'] = 'dashboard/Dashboard';

$route['user'] = 'user/User';

$route['admindashboard/setting'] = 'setting/setting';

$route['profile'] = 'setting/profile';
$route['profile/(:num)'] = 'setting/profile/user_get_by_id_details/$1';
$route['profile/update/(:num)'] = 'setting/profile/update_profile/$1';
$route['profile/updates/(:num)'] = 'setting/profile/update_account/$1';
$route['profile/delete/(:num)'] = 'setting/profile/delete_user_by_id/$1';
$route['profile/password/(:num)'] = 'setting/profile/update_password/$1';
$route['profile/role/(:num)'] = 'setting/profile/update_role/$1';


