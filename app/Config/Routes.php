<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/insert', 'Home::insert');
$routes->post('/actionInsert', 'Home::actionInsert');
$routes->get('/delete/(:any)', 'Home::delete/$1');