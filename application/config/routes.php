<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['users/sign-up'] = 'users/register';

$route['collections/create'] = 'collections/create';
$route['collections/update'] = 'collections/update';
$route['collections/(:any)'] = 'collections/view/$1';
$route['collections'] = 'collections/index';

$route['(:any)'] = 'pages/view/$1';

$route['default_controller'] = 'pages/view';
$route['translate_uri_dashes'] = FALSE;
$route['404_override'] = '';
