<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['employee'] = 'frontend/Employeecontroller/employee';
$route['employee/add'] = 'frontend/Employeecontroller/create';
$route['employee/store'] = 'frontend/Employeecontroller/store';
$route['employee/edit/(:any)'] = 'frontend/Employeecontroller/edit/$1';
$route['employee/update/(:any)'] = 'frontend/Employeecontroller/update/$1';
$route['employee/delate/(:any)'] = 'frontend/Employeecontroller/delate/$1';