<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/widget', 'Widget::index');
$routes->get('/ejemplo', 'Ejemplo::index');

$routes->resource('cliente');
