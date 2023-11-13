<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pegawai;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/dashboard', 'Pegawai::pegawai');
// $routes->get('/inventaris', 'Pegawai::');
// // $routes->get('/produk', 'Pegawai::produk');
// $routes->get('/user','UserController::index');
$routes->get('Pegawai/produk', [Pegawai::class, 'produk']);
$routes->get('Pegawai/inventaris', [Pegawai::class, 'inventaris']);