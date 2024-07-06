<?php
class Therapist extends Dbh
{
    private $pdo;

    public function __construct() {
        $this->pdo = $this->connect();
    }

    public function getTherapist() {
        if ($this->pdo) {
            $stmt = $this->pdo->prepare("SELECT * FROM therapists ORDER BY created_at DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            return [];
        }
    }
}

// Create an instance of the Therapist class
$therapists = new Therapist();

// Retrieve therapists
$therapistsList = $therapists->getTherapist();
