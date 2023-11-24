<?php

use App\Controllers\Admin;
use App\Controllers\UserController;
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
$routes->delete('/admin/akun-user/(:any)',[Admin::class, 'deleteUser'], ['filter'=>'role:admin']);
$routes->get('/admin/akun-user','Admin::listUser', ['filter'=>'role:admin']);
$routes->delete('/admin/akun-pegawai/(:any)',[Admin::class, 'deleteUser'], ['filter'=>'role:admin']);
$routes->get('/admin/akun-pegawai','Admin::listPegawai', ['filter'=>'role:admin']);
$routes->get('/admin/akun-pegawai/add','Admin::addPegawai', ['filter'=>'role:admin']);
$routes->post('/admin/akun-pegawai/store','Admin::savePegawai', ['filter'=>'role:admin']);
$routes->get('/admin/akun-pegawai/(:any)/edit',[Admin::class,'editPegawai'], ['filter'=>'role:admin']);
$routes->put('/admin/akun-pegawai/(:any)',[Admin::class,'updatePegawai'], ['filter'=>'role:admin']);

$routes->get('pegawai/', [Pegawai::class, 'index'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/produk', [Pegawai::class, 'produk'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/inventaris', [Pegawai::class, 'inventaris'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/konfirmasi', [Pegawai::class, 'confirm'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/complete', [Pegawai::class, 'complete'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/history', [Pegawai::class, 'history'], ['filter'=>'role:pegawai']);

$routes->get('/user','UserController::index', ['filter'=>'role:user']);
$routes->get('/user/product','UserController::products', ['filter'=>'role:user']);
$routes->get('/user/services','UserController::services', ['filter'=>'role:user']);
$routes->get('/user/product/(:any)',[UserController::class, 'detailsproducts'], ['filter'=>'role:user']);
$routes->post('/user/product/(:any)/buy',[UserController::class, 'buyProduct'], ['filter'=>'role:user']);
$routes->get('/user/formlayanan','UserController::formslayanan', ['filter'=>'role:user']);


// - edit akun pegawai
// - show product depends on db
// - product transaction to db

