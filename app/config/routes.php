<?php

use Core\Router;

//public links
Router::add('login', '/login', '\App\Controllers\Guest\LoginController');
Router::add('register', '/register', '\App\Controllers\Guest\RegisterController');
//user links
Router::add('index1', '/', '\App\Controllers\User\AccountsController');
Router::add('index', '/index', '\App\Controllers\User\AccountsController');
Router::add('game', '/game', '\App\Controllers\User\AccountsController','game');
Router::add('logout', '/logout', '\App\Controllers\User\LogoutController');