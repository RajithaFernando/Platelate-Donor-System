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
$route['users/register_page']='users/register_page';
$route['users/block']='users/block';
$route['users/get_user']='users/get_user';
$route['users/unblock/(:any)']='users/unblock/$1';
$route['users/change_password/(:any)']='users/change_password/$1';
$route['users/(:any)']='users/view/$1';

$route['passwords/recover_password']='passwords/recover_password';
$route['passwords/reset_password']='passwords/reset_password';

$route['differdonors']='differdonors';


$route['donors/get_donor_by_donor_id']='donors/get_donor_by_donor_id';
$route['donors/add_points/(:any)']='donors/add_points/$1';
$route['donors/search_donor']= 'donors/search_donor';
$route['donors/view_donor']='donors/view_donor';


/*$route['users/edit']='users/edit';*/


$route['default_controller'] = 'pages/view';

$route['(:any)']='pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
