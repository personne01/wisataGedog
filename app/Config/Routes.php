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
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('login', 'Auth::login');

$routes->get('/admin', 'Admin::index');
$routes->get('/admin/tambahWisata', 'Admin::create');
$routes->get('/admin/editWisata/(:segment)', 'Admin::edit/$1');
$routes->get('/admin/kelolaWisata', 'Admin::kelolaWisata');


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



/*
 * Myth:Auth routes file.
 */
// $routes->group('', ['namespace' => 'Myth\Auth\Controllers'], function ($routes) {
// 	// Login/out
// 	$routes->get('login', 'AuthController::login', ['as' => 'login']);
// 	$routes->post('login', 'AuthController::attemptLogin');
// 	$routes->get('logout', 'AuthController::logout');

// 	// Registration
// 	$routes->get('register', 'AuthController::register', ['as' => 'register']);
// 	$routes->post('register', 'AuthController::attemptRegister');

// 	// Activation
// 	$routes->get('activate-account', 'AuthController::activateAccount', ['as' => 'activate-account']);
// 	$routes->get('resend-activate-account', 'AuthController::resendActivateAccount', ['as' => 'resend-activate-account']);

// 	// Forgot/Resets
// 	$routes->get('forgot', 'AuthController::forgotPassword', ['as' => 'forgot']);
// 	$routes->post('forgot', 'AuthController::attemptForgot');
// 	$routes->get('reset-password', 'AuthController::resetPassword', ['as' => 'reset-password']);
// 	$routes->post('reset-password', 'AuthController::attemptReset');
// });




if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
