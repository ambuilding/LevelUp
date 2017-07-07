<?php

require 'RegisterUser.php';
require 'AuthController.php';
//use Acme\{RegisterUser, AuthController};

$registration = new Acme\RegisterUser;
$authController = new Acme\AuthController($registration);

$authController->register();