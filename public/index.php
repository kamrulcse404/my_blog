<?php
session_start();

use App\Controllers\AuthController;
use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\RegisterController;
use App\Controllers\TodoController;
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
        echo (new AuthController())->loginView();        
    }else {
        echo (new AuthController())->login();    
    }
}elseif ($path == '/register') {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo (new RegisterController())->registerView();        
    }else {
        echo (new RegisterController())->register();    
    }
}
elseif ($path == '/dashboard') {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo (new DashboardController())->deshboardView();        
    }else{
        echo (new TodoController())->onDelete();  
    }
}elseif ($path == '/addTodo') {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo (new TodoController())->addView();        
    }else {
        echo (new TodoController())->addTodo();    
    }
}elseif ($path == '/edit') {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo (new TodoController())->editView();         
    }else {
        echo (new TodoController())->updateTodo();    
    }
}else{
    echo (new HomeController())->index();
}


