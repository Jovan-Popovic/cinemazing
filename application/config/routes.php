<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['collections/create'] = 'posts/create';
$route['collections/(:any)'] = 'posts/view/$1';
$route['collections'] = 'posts/index';

$route['(:any)'] = 'pages/view/$1';

$route['default_controller'] = 'pages/view';
$route['translate_uri_dashes'] = FALSE;
$route['404_override'] = '';
