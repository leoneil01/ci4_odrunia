<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


/* My Routes */
$routes->get('/user/add', 'UserController::addUser');