<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'pages::index');
$routes->get('/guest/film', 'pages::film');   
$routes->get('/guest/news', 'pages::news');
$routes->get('/guest/review', 'pages::review');
$routes->get('/guest/about', 'pages::about');
$routes->get('/guest/addreview', 'pages::addreview');

$routes->get('/auth/login', 'pages::signin');
$routes->get('/auth/regis', 'pages::signup');

$routes->get('/dashboard/index', 'pages::indexDash');       
$routes->get('/dashboard/film', 'pages::filmDash');
$routes->get('/dashboard/news', 'pages::newsDash'); 
$routes->get('/dashboard/review', 'pages::reviewDash');
$routes->get('/dashboard/about', 'pages::aboutDash');
$routes->get('/dashboard/addreview', 'pages::addreviewDash');