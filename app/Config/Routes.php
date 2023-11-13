<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/redirect', 'Home::redirect');

$routes->get('/admin', 'Admin::index', ['filter'=>'role:admin']);
$routes->get('/inventaris', 'Admin::listInventaris', ['filter'=>'role:admin']);
$routes->get('/product', 'Admin::listProduct', ['filter'=>'role:admin']);
$routes->get('/service', 'Admin::listService', ['filter'=>'role:admin']);
$routes->get('/category', 'Admin::listjproduk', ['filter'=>'role:admin']);
$routes->get('/produk', 'Admin::listproduk', ['filter'=>'role:admin']);

$routes->get('/user','UserController::index', ['filter'=>'role:user']);
$routes->get('/user/products','UserController::products', ['filter'=>'role:user']);
$routes->get('/user/services','UserController::services', ['filter'=>'role:user']);
