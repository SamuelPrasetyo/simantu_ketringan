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

// Penduduk
$route['view_penduduk'] = 'Penduduk/PendudukController';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;