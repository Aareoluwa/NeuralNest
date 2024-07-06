<?php
include_once "../classes/dbh.classes.php";
include_once "../classes/add_therapist.classes.php";
include_once "../classes/add_therapist-contr.classes.php";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $profile_pics = isset($_POST['profile_pics']) ? htmlspecialchars($_POST['profile_pics']) : ''; 
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $specialization = isset($_POST['specialization']) ? htmlspecialchars($_POST['specialization']) : '';
    $experience = isset($_POST['experience']) ? htmlspecialchars($_POST['experience']) : '';
    

    // Instantiate addtherapist object
    $addtherapist = new TherapistContr();
    $addtherapist->handleTherapist($profile_pics, $name, $email, $phone, $specialization, $experience);
}
