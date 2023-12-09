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
$routes->get('view', 'RoomController::Index');
$routes->get('try', 'LoginController::try');
$routes->get('home', 'DashboardController::home');
$routes->get('chart-view', 'DashboardController::Chart');

$routes->group('admin', static function($routes){
               $routes->get('save', 'RoomController::insertRoom');
               $routes->post('try', 'RoomController::try');
               
});//Inserting Data to database
