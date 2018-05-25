<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
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
/*
  //For admin section

  $route['manage_service'] = 'super_admin/manage_service';

  $route['add_slider'] = 'super_admin/add_slider';
  $route['manage_slider'] = 'super_admin/manage_slider';
 */

//for admin section
$route['add_service'] = 'super_admin/add_service';
$route['manage_service'] = 'super_admin/manage_service';
$route['manage_logo'] = 'super_admin/manage_logo';





//For front section
$route['contact'] = 'welcome/contact';
$route['training'] = 'welcome/training';
$route['editing'] = 'welcome/editing';
$route['research'] = 'welcome/research';
$route['article_editing'] = 'welcome/article_editing';
$route['default_controller'] = "welcome";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */