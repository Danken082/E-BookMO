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
$routes->get('login', 'LoginController::index');
$routes->get('view', 'RoomController::Index');
$routes->get('try', 'LoginController::try');



$routes->group('user', static function($routes){
    $routes->post('register', 'SignupController::register');
    $routes->post('login', 'LoginController::loginAuth');
});

$routes->post('pay', 'RoomController::makePayment');

//For Admin
$routes->get('home', 'AdminController::home');
$routes->get('booked', 'AdminController::booked');
$routes->get('chart-view', 'AdminController::Chart');
$routes->get('count', 'ViewController::roomCount');
$routes->get('available', 'ViewController::countAvarooms');
$routes->get('unavailable', 'ViewController::countUnrooms');
$routes->group('admin', static function($routes){
                $routes->get('user', 'LoginController::viewUsers');
               $routes->post('save', 'RoomController::insertRoom');
               $routes->post('deleteRoom', 'RoomController::delRoom');
               $routes->post('try', 'RoomController::try');
               $routes->get('view', 'RoomController::room');
               $routes->get('transient', 'ViewController::Transient');
                $routes->get('appartment','ViewController::Appartment');               
});//Inserting Data to database

$routes->get('user/(:any)', 'SignupController::user/$1');
