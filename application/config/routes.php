<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// admin
$route['authentication/login']      = 'Admin/Authentication';
$route['authentication/do_login']   = 'Admin/Authentication/do_login';


$route['default_controller'] = 'Store/Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
