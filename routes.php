<?php


$router->get('', 'PagesController@home');
$router->get('logout', 'AuthController@logout');
$router->get('welcome', 'PagesController@welcome');

$router->post('login', 'AuthController@login');
$router->post('create', 'UsersController@create');
$router->post('attributes', 'UsersController@attributes');
