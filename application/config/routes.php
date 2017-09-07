<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['donation/donation']='donation/donation';
$route['users/current_users']='users/index';
$route['users/edit_profile']='users/edit_profile';

$route['default_controller'] = 'pages/view';

$route['(:any)']='pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
