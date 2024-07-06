<?php
include "../classes/dbh.classes.php";
include "../classes/register.classes.php";
include "../classes/register_contr.classes.php";

function generateReservedCode() {
    $year = date('Y'); // Current year
    $randomNumber = mt_rand(10, 99); // Random number
    $generatedCode = 'YOU' . "/" . $year . "/" . $randomNumber; 
    return $generatedCode;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize input data
    $profile_pics = isset($_POST['profile_pics']) ? htmlspecialchars($_POST['profile_pics']) : "";
    $first_name = isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : "";
    $last_name = isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : "";
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : "";
    $confirm_email = isset($_POST['confirm_email']) ? filter_var($_POST['confirm_email'], FILTER_SANITIZE_EMAIL) : "";
    $dob = isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : "";
    $country_code = isset($_POST['country_code']) ? htmlspecialchars($_POST['country_code']) : "";
    $phone_number = isset($_POST['phone_number']) ? htmlspecialchars($_POST['phone_number']) : "";
    $terms = isset($_POST['terms']) ? htmlspecialchars($_POST['terms']) : "";
    $privacy = isset($_POST['privacy']) ? htmlspecialchars($_POST['privacy']) : "";
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : "";
    $confirm_password = isset($_POST['confirm_password']) ? htmlspecialchars($_POST['confirm_password']) : "";
    
    // Generating Code
    $received_code = generateReservedCode();
    
    // Instantiate RegisterContr class
    $register = new RegisterContr(
        $profile_pics, $first_name, $last_name, $email, $confirm_email, $dob, $country_code, $phone_number, $terms, $privacy, $password, $confirm_password, $received_code
    );

    // Call the registerUser method with the required arguments
    if ($register->registerUser(
         $profile_pics, $first_name, $last_name, $email, $dob, $country_code, $phone_number, $terms, $privacy, $password, $received_code
        )) {
        // Registration successful
        header("Location: ../addteacher.php?status=success");
        exit(); 
    } 
}
