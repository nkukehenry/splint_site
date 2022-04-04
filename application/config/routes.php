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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['team-member/(:any)'] = 'team_member/view/$1';


$route['events'] = 'event';
$route['events/(:any)'] = 'event/view/$1';


$route['admin'] = 'admin/login';


$route['admin/jobs-and-opportunities'] = 'admin/service';
$route['admin/jobs-and-opportunities/edit/(:num)'] = 'admin/service/edit/$1';
$route['admin/jobs-and-opportunities/delete/(:num)'] = 'admin/service/delete/$1';
$route['admin/jobs-and-opportunities/new'] = 'admin/service/add';

$route['jobs-oppenings'] = 'service';
$route['jobs-oppenings/(:any)'] = 'service/view/$1';

$route['opportunities'] = 'service/opportunities';
$route['opportunities/(:any)'] = 'service/opportunities_details/$1';

$route['blog-post'] = 'news';
$route['blog-post/(:any)'] = 'news/view/$1';
$route['blog-post/category/(:any)'] = 'category/index/$1';

$route['member_blogs'] = 'exhibition';
$route['member_blogs/(:any)'] = 'exhibition/view/$1';

$route['admin/exhibitions'] = 'admin/exhibition_admin';
$route['admin/exhibitions/new'] = 'admin/exhibition_admin/add';
$route['admin/exhibitions/edit/(:num)'] = 'admin/exhibition_admin/edit/$1';
$route['admin/exhibitions/delete/(:num)'] = 'admin/exhibition_admin/delete/$1';

$route['admin/our-community'] = 'admin/why_choose';
$route['admin/our-community/new'] = 'admin/why_choose/add';
$route['admin/our-community/edit/(:num)'] = 'admin/why_choose/edit/$1';
$route['admin/our-community/delete/(:num)'] = 'admin/why_choose/delete/$1';


$route['admin/partner'] = 'admin/client';
$route['admin/partner/new'] = 'admin/client/add';
$route['admin/partner/edit/(:num)'] = 'admin/client/edit/$1';
$route['admin/partner/delete/(:num)'] = 'admin/client/delete/$1';

$route['admin/event-sponsor/(:num)'] = 'admin/client/event_sponsor/$1';
$route['admin/event-sponsor/new/(:num)'] = 'admin/client/event_sponsor_add/$1';
$route['admin/event-sponsor/edit/(:num)/(:num)'] = 'admin/client/event_sponsor_edit/$1/$2';
$route['admin/event-sponsor/delete/(:num)/(:num)'] = 'admin/client/event_sponsor_delete/$1/$2';

$route['our-community'] = 'community';
$route['membership-packages'] = 'community/member_packages';
$route['membership-registration/(:any)'] = 'community/registration/$1';
$route['save-registration'] = 'community/save_registration';

$route['admin/membership-packages'] = 'admin/pricing_table';
$route['admin/encouragement'] = 'admin/feature';
$route['admin/encouragement/add'] = 'admin/feature/add';
$route['admin/encouragement/edit/(:num)'] = 'admin/feature/edit/$1';
$route['admin/encouragement/delete/(:num)'] = 'admin/feature/delete/$1';

$route['pages/(:any)']   = 'pages/index/$1';
$route['counters']       = 'counters/index';
$route['counters/add']   = 'counters/create';
$route['counters/delete'] = 'counters/delete';
$route['testEmail']       = 'community/testEmail';





