<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/***
 *!       _____                            __
 *!      / ___/____ _____ ___  __  _____  / /
 *!      \__ \/ __ `/ __ `__ \/ / / / _ \/ / 
 *!     ___/ / /_/ / / / / / / /_/ /  __/ /  
 *!    /____/\__,_/_/ /_/ /_/\__,_/\___/_/   
 *                                          
 *? Author : Samuel Prasetyo
 *? Created : 2024
 ** Quotes : "Ubahlah pola pikirmu sebab kunci kesuksesanmu 
 **           berasal dari bagaimana kamu berpikir..."
 */

$route['default_controller'] = 'AuthController';

// Routes Authentication
$route['aksi_login'] = 'AuthController/aksi_login';
$route['logout'] = 'AuthController/logout';

// Main Page
$route['beranda'] = 'Main/HomeController';

// Data Penduduk
$route['view_penduduk'] = 'Data/PendudukController';
$route['detail_penduduk/(:any)'] = 'Data/PendudukController/detail_penduduk';
$route['add_penduduk'] = 'Data/PendudukController/page_add';
$route['create_penduduk'] = 'Data/PendudukController/create_penduduk';
$route['edit_penduduk'] = 'Data/PendudukController/page_edit';
$route['update_penduduk'] = 'Data/PendudukController/update_penduduk';
$route['delete_penduduk/(:any)'] = 'Data/PendudukController/delete_penduduk';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;