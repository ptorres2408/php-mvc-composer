<?php

$router = new \Bramus\Router\Router();

session_start();

$router->get('/signin', function () {
    echo 'login';
});

$router->post('/auth', function () {
    echo 'auth';
});

$router->get('/signup', function () {
    echo 'signup';
});

$router->post('/register', function () {
    echo 'register';
});

$router->get('/home', function () {
    echo 'home';
});

$router->post('/publish', function () {
    echo 'publish';
});

$router->get('/profile', function () {
    echo 'profile';
});

$router->post('/addLike', function () {
    echo 'addLike';
});

$router->get('/singout', function () {
    echo 'singout';
});

$router->get('/profile/{username}', function ($username) {
    echo 'auth ' . $username;
});


$router->run();
