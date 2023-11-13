<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pegawai;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/redirect', 'Home::redirect');

$routes->get('/admin', 'Admin::index', ['filter'=>'role:admin']);
$routes->get('/admin/inventaris', 'Admin::listInventaris', ['filter'=>'role:admin']);
$routes->get('/admin/product', 'Admin::listProduct', ['filter'=>'role:admin']);
$routes->get('/admin/service', 'Admin::listService', ['filter'=>'role:admin']);
$routes->get('/admin/akun-user','Admin::listUser', ['filter'=>'role:admin']);
$routes->get('/admin/akun-pegawai','Admin::listPegawai', ['filter'=>'role:admin']);

$routes->get('pegawai/', [Pegawai::class, 'index'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/produk', [Pegawai::class, 'produk'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/inventaris', [Pegawai::class, 'inventaris'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/konfirmasi', [Pegawai::class, 'confirm'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/complete', [Pegawai::class, 'complete'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/history', [Pegawai::class, 'history'], ['filter'=>'role:pegawai']);

$routes->get('/user','UserController::index', ['filter'=>'role:user']);
$routes->get('/user/products','UserController::products', ['filter'=>'role:user']);
$routes->get('/user/services','UserController::services', ['filter'=>'role:user']);
