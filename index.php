<?php
error_reporting(-1);
require_once('init.php');
session_start();
$router = new main;
$router->run();