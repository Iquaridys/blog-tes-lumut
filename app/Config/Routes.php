<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('login', 'Auth::login');
$routes->post('auth/loginSubmit', 'Auth::loginSubmit');
$routes->get('logout', 'Auth::logout');

$routes->group('post', function($routes) {
    $routes->get('/', 'Post::index');
    $routes->get('create', 'Post::create');
    $routes->post('store', 'Post::store');
    $routes->get('edit/(:num)', 'Post::edit/$1');
    $routes->post('update/(:num)', 'Post::update/$1');
    $routes->get('delete/(:num)', 'Post::delete/$1');
});

$routes->group('account', function($routes) {
    $routes->get('/', 'Account::index');
    $routes->get('create', 'Account::create');
    $routes->post('store', 'Account::store');
    $routes->get('edit/(:alphanum)', 'Account::edit/$1');
    $routes->post('update/(:alphanum)', 'Account::update/$1');
    $routes->get('delete/(:alphanum)', 'Account::delete/$1');
});
