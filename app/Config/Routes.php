<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Admin::index');
$routes->get('/inventaris', 'Admin::listInventaris');
$routes->get('/product', 'Admin::listProduct');
$routes->get('/service', 'Admin::listService');
