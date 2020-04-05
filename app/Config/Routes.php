<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/** [SERVICES TEMPLATES] */
$routes->group('services', function($routes){
	$routes->get('list', 'Request/ServicesList::index');
	$routes->get('labels/([A-Z])', 'Request\ServicesList::getServiceByLabel/$1');
	$routes->get('request/servitors', 'Clients\Renderers::index');
});
/** [END] */
//-
/** [AUTHENTICATION TEMPLATES] */
$routes->group('auth', function($routes){
	$routes->get('user/login', 'Authentication\Authentication::bs_login');
	$routes->get('user/signup', 'Authentication\Authentication::bs_signup');
	$routes->get('user/fpswrd', 'Authentication\Authentication::bs_recover_fpswrd');
	$routes->get('start/account/sub', 'Authentication\AuthRender::index');
	$routes->get('create/sr/account/(:alpha)', 'Authentication\AuthRender::create/$1');
});
 
/** [END] */

/** [API ENDPOINST] */
$routes->group('api', function($routes){
	$routes->post('auth/client/create', 'API\API_Authentication::bs_api_create_serviator');
	$routes->post('auth/users/signup', 'API\API_Authentication::bs_api_signup');

	//---[Dashboard:= client]---
	$routes->post('dash/auth/login', 'Clients\API\Authentication::handleLoginForm');
	$routes->post('files/up/clients/avatar', 'Clients\API\FileUploader::uploadClientAvatar');
	//---[Dashboard:= ./client]---
});
/** [END] */

//------[DASHBOARD]------

/** [Dashboard Routes] */
$routes->group('dash', function($routes){
//---[clients]---
	$routes->get('ng/rendar/board', 'Clients\Dashboard::index');//Dashboard
	$routes->get('ng/rendar/services', 'Clients\Dashboard::services');//Service
	$routes->get('ng/rendar/request', 'Clients\Dashboard::request');//Request
	$routes->get('ng/rendar/ewallet', 'Clients\Dashboard::wallet');//Wallet
	$routes->get('ng/rendar/account', 'Clients\Dashboard::account');//Account
	$routes->get('ng/rendar/notify/(:alphanum)', 'Clients\Dashboard::notification');//Notification
	$routes->post('ng/rendar/status/lslg', 'Clients\Dashboard::lastLogin');//LastLogin
//---[./client]---
	
});





//------[./DASHBOARD]------

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

