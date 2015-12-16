<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|messages.php
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "users";
$route['404_override'] = '';

//$route['test/(:any)'] = 'test/test2/$1';

$route['dashboard'] = 'users/dashboard';
$route['inbox'] = 'test/test2/inbox';
$route['email-list'] = 'messages/inbox';
$route['email-list-sent'] = 'messages/sentbox';
$route['email-compose'] = 'messages/compose';
$route['email-opened/(:num)'] = 'messages/mail_detail/$1';
$route['email-opened-sent/(:num)'] = 'messages/mail_detail/$1/true';

$route['autism_centers']= 'users/view_autism_centers';


$route['my_profile']='test/test2/my_profile';
$route['parent_view_performance']='test/test2/parent_view_performance';
$route['parent_manage_consultants']='test/test2/parent_manage_consultants';
$route['consultant_dashboard']='test/test2/consultant_dashboard';
$route['consultant_manage_peers']='test/test2/consultant_manage_peers';
$route['consultant_children_performance']='test/test2/consultant_children_performance';
$route['school_dashboard']='test/test2/school_dashboard';
$route['school_class_profile']='test/test2/school_dashboard';
$route['school_classes']='test/test2/school_dashboard';
$route['school_class_edit']='test/test2/school_class_edit';

$route['email/(:any)'] = 'email/$1';
//$route['(:any)'] = 'test/test2/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */