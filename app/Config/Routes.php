<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('');
$routes->setTranslateURIDashes(false);
$routes->set404Override(true);
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/login', 'User::login');
$routes->get('/login/user', 'User::login');
$routes->get('/user/dashboard', 'User::dashboard');
$routes->get('/dashboard', 'User::dashboard');
$routes->get('/profile', 'User::profile');
$routes->get('/user/profile', 'User::profile');
$routes->get('/thesis', 'User::thesis');
$routes->get('/user/thesis', 'User::thesis');
$routes->get('/registered_thesis', 'User::registered_thesis');
$routes->get('/user/registered_thesis', 'User::registered_thesis');
$routes->get('/user/applied_thesis', 'User::applied_thesis');
$routes->get('/applied_thesis', 'User::applied_thesis');
$routes->get('/login/admin', 'Admin::login');
$routes->get('/register', 'Home::login');
$routes->get('/admin', 'Admin::login');
$routes->get('/admin/login', 'Admin::login');
$routes->get('/admin/register', 'Admin::register');
$routes->get('/admin/dashboard', 'Admin::dashboard');

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
