<?php

class Users extends Dbh
{
    private $pdo;

    public function __construct() {
        $this->pdo = $this->connect();
    }

    public function getUsers() {
        if ($this->pdo) {
            $stmt = $this->pdo->prepare("SELECT * FROM users ORDER BY created_at DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            return [];
        }
    }
}

// Create an instance of the Users class
$users = new Users();

// Retrieve users
$usersList = $users->getUsers();
