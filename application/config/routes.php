<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['example']='example';
$route['sms/send_sms']='sms/send_sms';
$route['donorapprovals']='donorapprovals';
$route['donation/donation']='donation/donation';


$route['users/check_block_users']='users/check_block_users';
$route['users/dashboard']='users/dashboard';
$route['users/login']='users/login';
$route['users/logout']='users/logout';
$route['users/current_users']='users/current_users';
$route['users/register']='users/register';
$route['users/update']='users/update';
$route['users/update_other']='users/update_other';
$route['users/edit']='users/edit';
$route['users/block/(:any)']='users/block/$1';
$route['users/unblock/(:any)']='users/unblock/$1';
$route['users/(:any)']='users/view/$1';



$route['donors/add_points/(:any)']='donors/add_points/$1';
$route['donors/search_donor']= 'donors/search_donor';
$route['donors/view_donor']='donors/view_donor';


/*$route['users/edit']='users/edit';*/


$route['default_controller'] = 'pages/view';

$route['(:any)']='pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
