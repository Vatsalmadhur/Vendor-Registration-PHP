<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/register', 'Register::index');
$routes->post('/register/save', 'Register::save');

$routes->get('/company', 'Company::index');
$routes->post('/company/save', 'Company::save');

$routes->get('/dashboard', 'Dashboard::index');

$routes->add('/generatepdf', 'PdfController::index');

