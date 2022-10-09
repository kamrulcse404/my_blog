<?php

namespace App\Models;

use App\Helpers\Database;

class User
{
    public $connection;

    public function __construct()
    {
        $this->connection = Database::getInstance();
    }

    public function userValidationByUserName($userName)
    {
        $query = "SELECT * FROM users WHERE uname = :username";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':username', $userName);
        $stmt->execute();
        $userN = $stmt->fetch($this->connection::FETCH_ASSOC);
        return $userN;
    }

    public function save(array $user)
    {

        $name = htmlspecialchars($user['name']);
        $email = filter_var($user['email'], FILTER_VALIDATE_EMAIL);
        $userName = $user['user_name'];
        $password = password_hash($user['password'], PASSWORD_BCRYPT);

        $userN = $this->userValidationByUserName($userName);

        if ($userN['uname'] === $userName) {
            header('Location: /register');
            // $_SESSION['user_register'] = 'User Name Already Exist';
            exit;
        } else {
            $query = "INSERT INTO users (full_name, email, uname, pass) VALUES(:fname, :email, :userName, :pass)";

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":fname", $name);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":userName", $userName);
            $stmt->bindValue(":pass", $password);
            $stmt->execute();
        }
    }

    public function login(array $user)
    {

        $uname = $user['user_name'];
        
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE uname = :uname");
        $stmt->bindValue(':uname', $uname);
        $stmt->execute();
        $result = $stmt->fetch($this->connection::FETCH_ASSOC);
        $password = $user['user_password'];

        $userN = $this->userValidationByUserName($uname);

        if (password_verify($password, $userN['pass'])) {
            // session_start();
            $_SESSION['name'] = $result['full_name'];
            $_SESSION['username'] = $result['uname'];
            header('Location: /dashboard');
        } else {
            header('Location: /login');
            exit;
        }
    }
}
