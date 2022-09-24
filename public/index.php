<?php
session_start();

use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Helpers\Database;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();
$dbConfig = include_once __DIR__ . '/../config/database.php';
Database::loadConfig($dbConfig);

// route

$path = $_SERVER['PATH_INFO'] ?? '/';
if ($path == '/login') {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo (new LoginController())->loginView();        
    }else {
        echo (new LoginController())->login();        
    }
}elseif ($path == '/register') {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo (new RegisterController())->registerView();        
    }else {
        echo (new RegisterController())->register();    
    }
}elseif ($path == '/dashboard') {
    echo (new DashboardController())->index();
}else{
    echo (new HomeController())->index();
}

// route end

