<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/users', 'Home::getUsers');
$routes->post('/add-user', 'Home::addUser');
$routes->post('/update-user', 'Home::updateUser');
$routes->post('/delete-user', 'Home::deleteUser');
