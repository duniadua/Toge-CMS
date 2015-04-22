<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "showcontroller";
$route['404_override'] = '';
$route['backend'] = "AdminController";
$route['login'] = "LoginController";
$route['logout'] = "LoginController/logout";

$route['account'] = "AccountController";
$route['account/list'] = "AccountController/listAccount";
$route['account/update/(:num)'] = "AccountController/update/$1";
$route['account/delete/(:num)'] = "AccountController/delete/$1";

$route['postpage'] = "PageController";
$route['postpage/list'] = "PageController/listPage";
$route['postpage/update/(:num)'] = "PageController/update/$1";
$route['postpage/delete/(:num)'] = "PageController/delete/$1";

$route['category'] = "PageCategoryController";
$route['category/list'] = "PageCategoryController/listPage";
$route['category/update/(:num)'] = "PageCategoryController/update/$1";
$route['category/delete/(:num)'] = "PageCategoryController/delete/$1";

$route['config'] = "ConfigController";
$route['config/list'] = "ConfigController/listPage";
$route['config/update/(:num)'] = "ConfigController/update/$1";
$route['config/delete/(:num)'] = "ConfigController/delete/$1";

$route['setmenu'] = "MenuController";
$route['setmenu/list'] = "MenuController/listPage";
$route['setmenu/update/(:num)'] = "MenuController/update/$1";
$route['setmenu/delete/(:num)'] = "MenuController/delete/$1";

$route['upload'] = "UploadController";
$route['do_upload'] = "UploadController/doUpload";
$route['upload/update/(:num)'] = "UploadController/update/$1";
$route['upload/delete/(:num)'] = "UploadController/delete/$1";

$route['page/(:num)/(:any)'] = "ShowController/pid/$1";
$route['archive/(:num)/(:num)'] = "ArchiveController/byMonthYear/$1/$2";

$route['comment'] = "CommentController";
$route['comment/list'] = "CommentController/listPage";
$route['comment/update/(:num)'] = "CommentController/update/$1";
$route['comment/delete/(:num)'] = "CommentController/delete/$1";

$route['themes'] = "ThemesController";
/* End of file routes.php */
/* Location: ./application/config/routes.php */