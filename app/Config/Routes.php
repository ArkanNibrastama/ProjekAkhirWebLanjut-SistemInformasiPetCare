<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Admin::index');
$routes->get('/category', 'Admin::listjproduk');
$routes->get('/produk', 'Admin::listproduk');
$routes->get('/user','UserController::index');
