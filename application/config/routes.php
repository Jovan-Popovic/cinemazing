<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Users
$route['users/sign-up'] = 'users/register';

// Collections/Movies
$route['collections/create'] = 'collections/create';
$route['collections/update'] = 'collections/update';
$route['collections/(:any)'] = 'collections/view/$1';
$route['collections'] = 'collections/index';

$route['default_controller'] = 'pages/view';

// Categories
$route['genres'] = 'genres/index';
$route['genres/create'] = 'genres/create';
$route['genres/collections/(:any)'] = 'genres/collections/$1';

// Any
$route['(:any)'] = 'pages/view/$1';

// Defaults
$route['translate_uri_dashes'] = FALSE;
$route['404_override'] = '';
