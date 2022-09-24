<?php

namespace App\Models;

use App\Helpers\Database;
use PDO;

class User{
    public $connection;

    public function __construct()
    {
        $this->connection = Database::getInstance();
    }

    public function getUserByUserName($username){
        $query = 'SELECT * FROM users WHERE user_name=:userName';
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":userName", $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save(array $user){

        date_default_timezone_set('Asia/Dhaka');

        $name = $user['name'];
        $userName = $user['user_name'];
        $email = $user['email'];
        $password = $user['password'];

        $query = 'INSERT INTO users (full_name, email, uname, created_at,updated_at, pass) VALURS(:fname, :email, :userName, :created, :updated, :pass)';

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":fname", $name);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":userName", $userName);
        $stmt->bindValue(":pass", password_hash($password, PASSWORD_BCRYPT));
        $stmt->bindValue(":created", date('Y-m-d H:i:s'));
        $stmt->bindValue(":updated", date('Y-m-d H:i:s'));
        return $stmt->execute();
    }
}