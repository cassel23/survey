<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/profil', 'Home::profil');
$routes->get('/survey', 'Home::survey');
$routes->post('/survey', 'Home::new');
$routes->get('/choice/(:num)', 'Home::choice/$1');
$routes->post('/choice/(:num)', 'Home::setChoice/$1');
$routes->post('/choice/(:num)', 'Home::add/$1');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/resultsurvey', 'Home::resultsurvey');
$routes->get('/mysurvey', 'Home::mysurvey');
$routes->get('login', 'User::index');
$routes->get('user/signin', 'User::signin');
$routes->post('user/signin', 'User::create');
$routes->get('/hasilpertanyaan/(:num)', 'Pertanyaan::hasilpertanyaan/$1');
$routes->post('/hasilpertanyaan/(:num)', 'Pertanyaan::simpanRespon/$1');
$routes->get('/edit/(:num)', 'Home::editpertanyaan/$1');
$routes->post('/pertanyaan/(:num)', 'Home::pertanyaan/$1');
$routes->get('/survey/publish/(:num)', 'Home::publish/$1');
$routes->post('/publishsurvey/(:num)', 'Home::publishsurvey/$1');
$routes->post('/archievesurvey/(:num)', 'Home::archievesurvey/$1');
$routes->post('/deletesurvey/(:num)', 'Home::deletesurvey/$1');


$routes->post('login', 'Auth::login');
$routes->get('logout', 'Auth::logout');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
