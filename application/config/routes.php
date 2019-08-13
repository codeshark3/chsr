<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['entries/fetch_single_user'] = 'EntryController/fetch_single_user';

$route['entries/print']  ='EntryController/print';
$route['entries/create']  ='EntryController/create';
$route['entries/fetch'] = 'EntryController/fetch';
$route['entries/(:any)'] = 'entries/view/$1';

$route['entries'] = 'EntryController/index';



//accounts
$route['accounts'] = 'AuthController/accounts';

//login
$route['login']='AuthController/login';



$route['default_controller'] = 'EntryController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




$route['success-flash'] = 'MyFlashController/success';
$route['error-flash'] = 'MyFlashController/error';
$route['warning-flash'] = 'MyFlashController/warning';
$route['info-flash'] = 'MyFlashController/info';