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
$routes->delete('/admin/akun-user/(:any)',[Admin::class, 'deleteUser'], ['filter'=>'role:admin']);
$routes->get('/admin/service/create', 'Admin::createservice', ['filter'=>'role:admin']);
$routes->post('/admin/service/store', 'Admin::storeservice', ['filter'=>'role:admin']);
$routes->get('/admin/service/(:any)/edit', 'Admin::editservice/$1', ['filter'=>'role:admin']);
$routes->put('/admin/service/(:any)', 'Admin::updateservice/$1', ['filter'=>'role:admin']);
$routes->delete('/admin/service/(:any)', 'Admin::destroyservice/$1', ['filter'=>'role:admin']);
$routes->get('/admin/akun-user','Admin::listUser', ['filter'=>'role:admin']);
$routes->delete('/admin/akun-pegawai/(:any)',[Admin::class, 'deleteUser'], ['filter'=>'role:admin']);
$routes->get('/admin/akun-pegawai','Admin::listPegawai', ['filter'=>'role:admin']);
$routes->get('/admin/akun-pegawai/add','Admin::addPegawai', ['filter'=>'role:admin']);
$routes->post('/admin/akun-pegawai/store','Admin::savePegawai', ['filter'=>'role:admin']);
$routes->get('/admin/akun-pegawai/(:any)/edit',[Admin::class,'editPegawai'], ['filter'=>'role:admin']);
$routes->put('/admin/akun-pegawai/(:any)',[Admin::class,'updatePegawai'], ['filter'=>'role:admin']);

$routes->get('pegawai/', [Pegawai::class, 'index'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/konfirmasi/(:any)', [Pegawai::class, 'confirmBooking'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/konfirmasi', [Pegawai::class, 'confirm'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/cancel/(:any)', [Pegawai::class, 'cancelBooking'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/complete/(:any)', [Pegawai::class, 'completeBooking'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/complete', [Pegawai::class, 'complete'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/history/(:any)', [Pegawai::class, 'historyBooking'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/history', [Pegawai::class, 'history'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/product', [Pegawai::class, 'listProduct'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/createproduct', [Pegawai::class, 'createproduct'], ['filter'=>'role:pegawai']);
$routes->post('pegawai/product/store', [Pegawai::class, 'storeproduct'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/product/(:any)/edit', 'Pegawai::editproduct/$1', ['filter'=>'role:pegawai']);
$routes->put('pegawai/product/(:any)', 'Pegawai::updateproduct/$1', ['filter'=>'role:pegawai']);
$routes->delete('pegawai/product/(:any)', 'Pegawai::destroyproduct/$1', ['filter'=>'role:pegawai']);
$routes->get('pegawai/inventaris', [Pegawai::class, 'listInventaris'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/createinventaris', [Pegawai::class, 'createInventaris'], ['filter'=>'role:pegawai']);
$routes->post('pegawai/inventaris/store', [Pegawai::class, 'storeInventaris'], ['filter'=>'role:pegawai']);
$routes->get('pegawai/inventaris/(:any)/edit', 'Pegawai::editInventaris/$1', ['filter'=>'role:pegawai']);
$routes->put('pegawai/inventaris/(:any)', 'Pegawai::updateInventaris/$1', ['filter'=>'role:pegawai']);
$routes->delete('pegawai/inventaris/(:any)', 'Pegawai::destroyInventaris/$1', ['filter'=>'role:pegawai']);


$routes->get('/user','UserController::index', ['filter'=>'role:user']);
$routes->get('/user/product','UserController::products', ['filter'=>'role:user']);
$routes->get('/user/services','UserController::services', ['filter'=>'role:user']);
$routes->get('/user/product/(:any)',[UserController::class, 'detailsproducts'], ['filter'=>'role:user']);
$routes->post('/user/product/(:any)/buy',[UserController::class, 'buyProduct'], ['filter'=>'role:user']);
$routes->get('/user/formlayanan','UserController::formslayanan', ['filter'=>'role:user']);
$routes->post('/user/booking','UserController::simpan_data', ['filter'=>'role:user']);
$routes->get('/user/profile','UserController::profiles', ['filter'=>'role:user']);
$routes->get('/user/editprofile','UserController::edit_profile', ['filter'=>'role:user']);
$routes->put('/user/profile', 'UserController::update', ['filter' => 'role:user']);
$routes->get('/user/bookingstatus', 'UserController::bookingStatus', ['filter' => 'role:user']);



//ganti return render nya jadi "auth/login" di AuthController.php lib