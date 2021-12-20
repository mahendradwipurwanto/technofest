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

$route['DetailKarya/(:any)']     = 'Karya/detail/$1';
$route['DaftarKarya/(:any)']     = 'Karya/daftar/$1';

$route['HistoryKarya']           = 'Karya/history_karya';
$route['ListKarya/(:num)']       = 'Karya/list_karya/$1';
$route['KaryaAdmin']             = 'Karya/adminkarya';
$route['UploadKarya/(:any)']     = 'Karya/Tambah/$1';
$route['EditKarya/(:any)']       = 'Karya/Edit/$1';
$route['LihatKarya/(:any)']      = 'Karya/Lihat/$1';
$route['UploadKarya']            = 'Karya/AwalUpload';
$route['VerifKarya']             = 'Karya/Verif';
$route['Browser']                = 'Dashboard/Browser';
$route['Koordinator']            = 'Dashboard/Koordinator';

$route['Lihat/(:any)']           = 'Karya/detail/$1';
$route['vote/(:any)']            = 'Karya/vote/$1';

$route['data-agenda/(:any)']     = 'Agenda_user/detail/$1';

$route['Pengguna']               = 'Dashboard/dataPengguna';

$route['Daftar']                 = 'Masuk/Daftar';
$route['Keluar']                 = 'Masuk/logout';
$route['Lupa-pass']              = 'Masuk/lupa_pass';
$route['Recovery-password/(:any)']      = 'Masuk/ubah_pass/$1';

$route['coming-soon']            = 'Masuk/dev_mode';


$route['default_controller'] = 'Home';
$route['404_override'] = 'Home/error404';
$route['translate_uri_dashes'] = FALSE;
