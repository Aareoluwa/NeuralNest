<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Login extends Dbh
{
    protected function CheckLogin($email)
    {
        require '../vendor/autoload.php';

        try {
            $mail = new PHPMailer(true);
            
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'joshuaadeyemi445@gmail.com'; // Replace with your email
            $mail->Password = 'yrkddeezyduwkodd'; // Replace with your password or use environment variables
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->setFrom('joshuaadeyemi445@gmail.com', 'YOUCARE'); // Replace with your email
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Alert!!! | YOUCARE Team';
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            $email_template = "Someone tried to login! Was this you?" .
                "" .
                "<p>Time Logged In: " . date('Y-m-d H:i:s') . 
                "<p>$userAgent</p>".
                "<b>StellarMind Team</b>";

            $mail->Body = $email_template;
            
            if ($mail->send()) {
                return true;
            } else {
                throw new Exception('Email sending failed.');
            }
        } catch (Exception $e) {
            error_log("Error sending email: " . $e->getMessage());
            return false;
        }
    }

    

    protected function getUser($email, $password)
    {
        try {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ?;');
            if (!$stmt->execute([$email])) {
                throw new Exception('Error executing query.');
            }

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user || !password_verify($password, $user['password'])) {
                return false;
            }  

            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['profile_pics'] = $user['profile_pics'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['dob'] = $user['dob'];
            $_SESSION['country_code'] = $user['country_code'];
            $_SESSION['phone_number'] = $user['phone_number'];
            $_SESSION['terms'] = $user['terms'];
            $_SESSION['privacy'] = $user['privacy'];
            $_SESSION['received_code'] = $user['received_code'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['created_at'] = $user['created_at'];

            $stmt = null;

            return $user;
        } catch (Exception $e) {
            error_log("Error fetching user data: " . $e->getMessage());
            return false;
        }
    }
}
