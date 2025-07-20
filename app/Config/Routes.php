<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProfilController::profil');
$routes->get('/crud', 'Crud::index');
$routes->get('/crud/tambah', 'Crud::tambah');
$routes->post('/crud/tambah', 'Crud::tambah');
$routes->get('/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->post('/crud/editan', 'Crud::editan');
$routes->get('/crud/hapus/(:segment)', 'Crud::hapus/$1');
$routes->get('/profil', 'ProfilController::profil');
$routes->get('/pengalaman', 'ProfilController::pengalaman');
