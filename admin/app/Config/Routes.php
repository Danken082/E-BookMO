<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AdminController::login');
$routes->get('/home', 'ViewController::home');
$routes->get('/dash', 'ViewController::dashboard');
$routes->get('/booked', 'ViewController::booking');
$routes->get('/check_in', 'ViewController::check_in');
$routes->get('/check_out', 'ViewController::check_out');
$routes->get('/rooms', 'ViewController::rooms');
$routes->get('/room_categ', 'ViewController::room_categories');
$routes->get('/users', 'ViewController::users');
$routes->get('/site_set', 'ViewController::site_settings');