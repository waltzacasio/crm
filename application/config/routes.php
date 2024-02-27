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
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//these are pages/functions

$route['login'] = 'pages/login';
$route['logout'] = 'pages/logout';

    
$route['add'] = 'pages/add';

$route['edit/(:any)/(:num)'] = 'pages/edit/$1/$2';
$route['edit/(:any)/(:num)/(:num)'] = 'pages/edit/$1/$2/$3';

$route['edit_history'] = 'pages/edit_history/';

$route['edit_history/(:any)'] = 'pages/edit_history/$1';
$route['edit_history/(:any)/(:any)'] = 'pages/edit_history/$1/$2';
$route['edit_history/(:any)/(:any)/(:num)'] = 'pages/edit_history/$1/$2/$3';


$route['delete'] = 'pages/delete';
$route['deleted_records'] = 'pages/deleted_records';
$route['deleted_records/(:num)'] = 'pages/deleted_records/$1';


$route['search'] = 'pages/search/';
$route['search/(:any)'] = 'pages/search/$1';
$route['search/(:any)/(:num)'] = 'pages/search/$1/$2';

$route['search_deleted'] = 'pages/search_deleted/';
$route['search_deleted/(:any)'] = 'pages/search_deleted/$1';
$route['search_deleted/(:any)/(:num)'] = 'pages/search_deleted/$1/$2';

$route['details/(:any)/(:any)'] = 'pages/details/$1/$2';

$route['testpage'] = 'pages/testpage';

$route['default_controller'] = 'pages/view';


$route['(:any)'] = 'pages/view/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
