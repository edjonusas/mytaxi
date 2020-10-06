<?php

use Core\Router;

//public links
Router::add('index1', '/', '\App\Controllers\Guest\TaxiController');
Router::add('index', '/index', '\App\Controllers\Guest\TaxiController');
Router::add('feedback', '/feedback', '\App\Controllers\Guest\TaxiController', 'feedback');
Router::add('login', '/login', '\App\Controllers\Guest\LoginController');
Router::add('register', '/register', '\App\Controllers\Guest\RegisterController');
//user links
Router::add('logout', '/logout', '\App\Controllers\User\LogoutController');