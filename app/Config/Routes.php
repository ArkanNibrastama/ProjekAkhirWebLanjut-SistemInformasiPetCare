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
$routes->get('/category', 'Admin::listjproduk');
$routes->get('/produk', 'Admin::listproduk');
$routes->get('/user','UserController::index');
$routes->get('/products','UserController::products');
$routes->get('/services','UserController::services');
$routes->get('/akun-user','Admin::listUser');
$routes->get('/akun-pegawai','Admin::listPegawai');
