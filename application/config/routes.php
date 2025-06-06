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
$route['default_controller'] = 'WebController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'AuthController/index';
$route['login/post'] = 'AuthController/login_post';
$route['google-login'] = "AuthController/google_login";
$route['auth/verify_email/(:any)'] = "AuthController/verify_email/$1";
$route['register'] = 'AuthController/register';
$route['register/post'] = 'AuthController/register_post';
$route['logout'] = 'AuthController/logout';
$route['forget-password'] = 'AuthController/forget_password';
$route['forget-password/post'] = 'AuthController/forget_password_post';
$route['forget-password/check-email'] = "AuthController/forget_password_check_email";
$route['reset-password/(:any)'] = "AuthController/reset_password/$1";
$route['reset-password/post/(:any)'] = "AuthController/reset_password_post/$1";
$route['like/toggle_like'] = "WebController/toggle_like";
$route['ckeditor/file-upload'] = "CKEditor/file_upload";
$route['search'] = "WebController/search";

$route['hometest'] = "WebController/hometest";

$route['dashboard'] = "DashboardController/index";

$route['add_comment'] = "WebController/add_comment";

$route['profile'] = "WebController/profile";

$route['create-post/(:num)'] = "WebController/create_post/$1";

$route['forum-post/submit'] = "WebController/forum_post_store";

$route['forum/(:any)'] = "WebController/forum_posts/$1";

$route['add_comments'] = "WebController/add_comment";

$route['toggle_follow'] = "WebController/toggle_follow";


$route['toggle_bookmark'] = "WebController/toggle_bookmark";


$route['bookmark'] = "WebController/bookmark";

$route['bookmark/delete_selected_bookmarks'] = 'WebController/delete_selected_bookmarks';

$route['my-posts'] = "WebController/my_posts";

$route['pending-approval'] = "WebController/not_approved_posts";

$route['pending-approval/(:any)'] = "WebController/view_pending_post_detail/$1";

$route['moderator/edit/post/(:any)'] = "WebController/moderator_edit_post/$1";

$route['edit/post/(:any)'] = "WebController/edit_post/$1";


$route['delete/post/(:any)'] = 'WebController/delete_post/$1';

$route['forum-post/moderator/update'] = "WebController/update_moderator_post";

$route['forum-post/update'] = "WebController/update_post";


$route['chat/storeMessage'] = 'WebController/storeMessage';

$route['chat'] = "WebController/chat";

$route['chat/(:any)'] = "WebController/chat_detail/$1";


$route['jobs'] = "WebController/jobs";
// $route['job/fetch-jobs'] = "JobController/fetch_jobs";
$route['job/(:any)'] = "WebController/job_detail/$1";

$route['members/member-(:num)'] = "WebController/member/$1";


// $route['page'] = 'PageController/index';
// $route['page/(:any)'] = 'WebController/page/$1';

$route['reply/(:num)/(:num)/(:any)'] = "WebController/reply/$1/$2/$3";


// $route['test'] = "WebController/send_test_notification";

$route['clear-notification'] = "WebController/clear_notification";

$route['(:any)'] = "WebController/page/$1";

$route['(:any)/(:any)'] = "WebController/forum_post_detail/$1/$2";





