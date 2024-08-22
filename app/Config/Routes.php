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
$routes->get('/oklubu', 'About::index');
$routes->get('/vysledky', 'Matches::index');
$routes->get('/tymy', 'Teams::index');
$routes->get('/kontakt', 'Kontakt::index');
$routes->get('/login', 'LoginForm::index');
$routes->get('/workspace', 'SystemHome::index');
$routes->get('/workspace/calendar', 'Calendar::index');
$routes->get('/workspace/a', 'A::index');
$routes->get('/workspace/b', 'B::index');
$routes->get('/workspace/u19', 'U19::index');
$routes->get('/workspace/u19/score', 'U19::score');
$routes->get('/workspace/u19/list', 'U19::players');
$routes->get('/workspace/u19/info', 'U19::info');
$routes->get('/workspace/u17', 'U17::index');
$routes->get('/workspace/u17/score', 'U17::score');
$routes->get('/workspace/u17/list', 'U17::players');
$routes->get('/workspace/u17/info', 'U17::info');
$routes->get('/workspace/u15', 'U15::index');
$routes->get('/workspace/u15/score', 'U15::score');
$routes->get('/workspace/u15/list', 'U15::players');
$routes->get('/workspace/u15/info', 'U15::info');
$routes->get('/workspace/u13', 'U13::index');
$routes->get('/workspace/u13/score', 'U13::score');
$routes->get('/workspace/u13/list', 'U13::players');
$routes->get('/workspace/u13/info', 'U13::info');
$routes->get('/workspace/u11', 'U11::index');
$routes->get('/workspace/u11/score', 'U11::score');
$routes->get('/workspace/u11/list', 'U11::players');
$routes->get('/workspace/u11/info', 'U11::info');
$routes->get('/workspace/u10', 'U10::index');
$routes->get('/workspace/u10/score', 'U10::score');
$routes->get('/workspace/u10/list', 'U10::players');
$routes->get('/workspace/u10/info', 'U10::info');
$routes->get('/workspace/u9', 'U9::index');
$routes->get('/workspace/u9/score', 'U9::score');
$routes->get('/workspace/u9/list', 'U9::players');
$routes->get('/workspace/u9/info', 'U9::info');
$routes->get('/workspace/u8', 'U8::index');
$routes->get('/workspace/u8/score', 'U8::score');
$routes->get('/workspace/u8/list', 'U8::players');
$routes->get('/workspace/u8/info', 'U8::info');
$routes->get('/workspace/profile', 'Profile::index');


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
