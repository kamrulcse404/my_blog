<?php

namespace App\Models;

use App\Helpers\Database;

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
        return $stmt->fetch($this->connection::FETCH_ASSOC);
    }

    public function save(array $user){

        $name = htmlspecialchars($user['name']);
        $email = filter_var($user['email'], FILTER_VALIDATE_EMAIL);
        $userName = $user['user_name'];
        $password = password_hash($user['password'], PASSWORD_BCRYPT);

        $query = "INSERT INTO users (full_name, email, uname, pass) VALUES(:fname, :email, :userName, :pass)";

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":fname", $name);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":userName", $userName);
        $stmt->bindValue(":pass",$password);

        return $stmt->execute();
    }
}