<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['(:any)/home'] = 'home';
$route['(:any)/gpent'] = 'gpent';
$route['404_override'] = 'pagenotfound';
$route['translate_uri_dashes'] = FALSE;
