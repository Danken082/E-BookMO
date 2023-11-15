<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('signup', 'SignupController::index');
$routes->get('/', 'ViewController::home');
$routes->get('about', 'ViewController::about');
$routes->get('contact', 'ViewController::contact');
$routes->get('visit', 'ViewController::visit');
$routes->get('book', 'ViewController::book');
$routes->match(['get','post'], 'SignupController/Insert', 'SignupController::insert');
$routes->match(['get','post'], 'LoginController/login', 'LoginController::loginAuth');
$routes->get('login', 'LoginController::index');
$routes->get('try', 'LoginController::try');
$routes->get('/login', 'AdminController::login');
$routes->get('/admin/home', 'AdminViewController::home');
$routes->get('/dash', 'AdminViewController::dashboard');
$routes->get('/booked', 'AdminViewController::booking');
$routes->get('/check_in', 'AdminViewController::check_in');
$routes->get('/check_out', 'AdminViewController::check_out');
$routes->get('/rooms', 'AdminViewController::rooms');
$routes->get('/room_categ', 'AdminViewController::room_categories');
$routes->get('/users', 'AdminViewController::users');
$routes->get('/site_set', 'AdminViewController::site_settings');