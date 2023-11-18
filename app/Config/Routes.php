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
$routes->get('/admin/inventaris/create', 'Admin::createInventaris', ['filter'=>'role:admin']);
$routes->post('/admin/inventaris/store', 'Admin::storeInventaris', ['filter'=>'role:admin']);
$routes->get('/admin/inventaris/(:any)/edit', 'Admin::editInventaris/$1', ['filter'=>'role:admin']);
$routes->put('/admin/inventaris/(:any)', 'Admin::updateInventaris/$1', ['filter'=>'role:admin']);
$routes->delete('/admin/inventaris/(:any)', 'Admin::destroyInventaris/$1', ['filter'=>'role:admin']);
$routes->get('/admin/product', 'Admin::listProduct', ['filter'=>'role:admin']);
$routes->get('/admin/product/create', 'Admin::createproduct', ['filter'=>'role:admin']);
$routes->post('/admin/product/store', 'Admin::storeproduct', ['filter'=>'role:admin']);
$routes->get('/admin/product/(:any)/edit', 'Admin::editproduct/$1', ['filter'=>'role:admin']);
$routes->put('/admin/product/(:any)', 'Admin::updateproduct/$1', ['filter'=>'role:admin']);
$routes->delete('/admin/product/(:any)', 'Admin::destroyproduct/$1', ['filter'=>'role:admin']);
$routes->get('/admin/service', 'Admin::listService', ['filter'=>'role:admin']);
$routes->get('/admin/service/create', 'Admin::createservice', ['filter'=>'role:admin']);
$routes->post('/admin/service/store', 'Admin::storeservice', ['filter'=>'role:admin']);
$routes->get('/admin/service/(:any)/edit', 'Admin::editservice/$1', ['filter'=>'role:admin']);
$routes->put('/admin/service/(:any)', 'Admin::updateservice/$1', ['filter'=>'role:admin']);
$routes->delete('/admin/service/(:any)', 'Admin::destroyservice/$1', ['filter'=>'role:admin']);
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
$routes->get('/user/detail_products','UserController::detailsproducts', ['filter'=>'role:user']);
$routes->get('/user/formlayanan','UserController::formslayanan', ['filter'=>'role:user']);


