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
$route['beranda'] = 'HomeController';

// Data Penduduk
$route['view_penduduk'] = 'Data/PendudukController';
$route['detail_penduduk/(:any)'] = 'Data/PendudukController/detail_penduduk';
$route['add_penduduk'] = 'Data/PendudukController/page_add';
$route['create_penduduk'] = 'Data/PendudukController/create_penduduk';
$route['edit_penduduk/(:any)'] = 'Data/PendudukController/page_edit';
$route['update_penduduk'] = 'Data/PendudukController/update_penduduk';
$route['delete_penduduk/(:any)'] = 'Data/PendudukController/delete_penduduk';
$route['import_penduduk'] = 'Data/PendudukController/import_penduduk';

// Data Kelahiran
$route['view_kelahiran'] = 'Data/KelahiranController';
$route['detail_kelahiran/(:any)'] = 'Data/KelahiranController/detail_kelahiran';
$route['add_kelahiran'] = 'Data/KelahiranController/page_add';
$route['create_kelahiran'] = 'Data/KelahiranController/create_kelahiran';
$route['edit_kelahiran/(:any)'] = 'Data/KelahiranController/page_edit';
$route['update_kelahiran'] = 'Data/KelahiranController/update_kelahiran';
$route['delete_kelahiran/(:any)'] = 'Data/KelahiranController/delete_kelahiran';
$route['import_kelahiran'] = 'Data/KelahiranController/import_kelahiran';

// Surat Pengantar
$route['view_suratpengantar'] = 'Surat/SuratPengantarController';
$route['add_suratpengantar'] = 'Surat/SuratPengantarController/page_add';
$route['create_suratpengantar'] = 'Surat/SuratPengantarController/create_surat';
$route['edit_suratpengantar/(:any)'] = 'Surat/SuratPengantarController/page_edit';
$route['update_suratpengantar'] = 'Surat/SuratPengantarController/update_surat';
$route['delete_suratpengantar/(:any)'] = 'Surat/SuratPengantarController/delete_surat';
$route['pdf_suratpengantar/(:any)'] = 'Surat/SuratPengantarController/pdf_surat';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;