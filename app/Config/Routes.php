<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/tipe', 'Tipe::index');
$routes->get('/tipe/tambah-tipe', 'Tipe::tambahTipe');
$routes->post('/tipe/simpan-tipe', 'Tipe::simpanTipe');
$routes->get('/tipe/ubah-tipe/(:segment)', 'Tipe::ubahTipe/$1');
$routes->post('/tipe/update-tipe/(:segment)', 'Tipe::updateTipe/$1');
$routes->delete('/tipe/(:num)', 'Tipe::hapusTipe/$1');

$routes->get('/properti/data-properti', 'Properti::prop');
$routes->get('/properti/tambah-properti', 'Properti::tambahProp');
$routes->post('/properti/simpan-properti', 'Properti::simpanProp');
$routes->get('/properti/ubah-properti/(:segment)', 'Properti::ubahProp/$1');
$routes->post('/properti/update-properti/(:segment)', 'Properti::updateProp/$1');
$routes->delete('/properti/(:num)', 'Properti::hapusProp/$1');

$routes->get('/kategori', 'Kategori::index');
$routes->get('/kategori/tambah-kategori', 'Kategori::tambahKat');
$routes->post('/kategori/simpan-kategori', 'Kategori::simpanKat');
$routes->get('/kategori/ubah-kategori/(:segment)', 'Kategori::ubahKat/$1');
$routes->post('/kategori/update-kategori/(:segment)', 'Kategori::updateKat/$1');
$routes->delete('/kategori/(:num)', 'Kategori::hapusKat/$1');

$routes->get('/platform', 'Platform::index');
$routes->get('/platform/tambah-platform', 'Platform::tambahPlat');
$routes->post('/platform/simpan-platform', 'Platform::simpanPlat');
$routes->get('/platform/ubah-platform/(:segment)', 'Platform::ubahPlat/$1');
$routes->post('/platform/update-platform/(:segment)', 'Platform::updatePlat/$1');
$routes->delete('/platform/(:num)', 'Platform::hapusPlat/$1');

$routes->get('/toko/data-toko', 'Toko::toko');
$routes->get('/toko/tambah-toko', 'Toko::tambahToko');
$routes->post('/toko/simpan-toko', 'Toko::simpanToko');
$routes->get('/toko/ubah-toko/(:segment)', 'Toko::ubahToko/$1');
$routes->post('/toko/update-toko/(:segment)', 'Toko::updateToko/$1');
$routes->delete('/toko/(:num)', 'Toko::hapusToko/$1');

$routes->get('/iklan', 'Iklan::index');
$routes->get('/iklan/tambah-iklan', 'Iklan::tambahIklan');
$routes->post('/iklan/simpan-iklan', 'Iklan::simpanIklan');
$routes->get('/iklan/ubah-iklan/(:segment)', 'Iklan::ubahIklan/$1');
$routes->post('/iklan/update-iklan/(:segment)', 'Iklan::updateIklan/$1');
$routes->delete('/iklan/(:num)', 'Iklan::hapusIklan/$1');

$routes->get('/', 'Home::index');
$routes->get('/properti/search', 'Properti::search');

$routes->get('/properti', 'Properti::index');
$routes->get('/properti/(:segment)', 'Properti::detail/$1');

$routes->get('/toko', 'Toko::index');
$routes->get('/toko/(:segment)', 'Toko::detail/$1');
