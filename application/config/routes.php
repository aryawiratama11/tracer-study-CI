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
$route['default_controller'] = 'auth/index';

//login
$route['tracer/login'] = 'auth/cek_login';

//mahasiswa
$route['dashboard/alumni'] = 'mahasiswa/admin_mhs/index';
$route['dashboard/alumni/biodata'] = 'mahasiswa/admin_mhs/user';
$route['dashboard/alumni/isitracer'] = 'mahasiswa/admin_mhs/isitracer';
$route['dashboard/alumni/logout'] = 'mahasiswa/admin_mhs/logout';
//perusahaan
$route['dashboard/company'] = 'perusahaan/admin_perusahaan/index';
$route['dashboard/company/biodata'] = 'perusahaan/admin_perusahaan/dataperusahaan';
$route['dashboard/company/dataalumni'] = 'perusahaan/admin_perusahaan/dataalumni';
$route['dashboard/company/logout'] = 'perusahaan/admin_perusahaan/logout';
//admin
$route['dashboard/admin'] = 'admin/admin_kampus/index';
$route['dashboard/admin/dataadmin'] = 'admin/admin_kampus/profil_adm';
$route['dashboard/admin/tambahadmin'] = 'admin/admin_kampus/tambah_adm';
$route['dashboard/admin/editadmin'] = 'admin/admin_kampus/edit_adm';

$route['dashboard/admin/dataalumni'] = 'admin/admin_kampus/data_alumni';
$route['dashboard/admin/tambahdataalumni'] = 'admin/admin_kampus/tambah_alumni';
$route['dashboard/admin/generating'] = 'admin/admin_kampus/save_alumni';
$route['dashboard/admin/updating'] = 'admin/admin_kampus/save_edit_alumni/'; 

$route['dashboard/admin/dataperusahaan'] = 'admin/admin_kampus/data_perusahaan';
$route['dashboard/admin/tambahdataperusahaan'] = 'admin/admin_kampus/tambah_company';
$route['dashboard/admin/updateperusahaan'] = 'admin/admin_kampus/edit_company';
$route['dashboard/admin/logout'] = 'admin/admin_kampus/logout';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
