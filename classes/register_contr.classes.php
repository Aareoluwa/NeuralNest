<?php
class RegisterContr extends Register
{
    private $profile_pics;
    private $first_name;
    private $last_name;
    private $email;
    private $confirm_email;
    private $dob;
    private $country_code;
    private $phone_number;
    private $terms;
    private $privacy;
    private $password;
    private $confirm_password;
    private $received_code;

    public function __construct(
        $profile_pics, $first_name, $last_name, $email, $confirm_email, $dob, $country_code, $phone_number, $terms, $privacy, $password, $confirm_password
    ) {
        $this->profile_pics = $profile_pics;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->confirm_email = $confirm_email;
        $this->dob = $dob;
        $this->country_code = $country_code;
        $this->phone_number = $phone_number;
        $this->terms = $terms;
        $this->privacy = $privacy;
        $this->password = $password;
        $this->confirm_password = $confirm_password;
        $this->received_code = $this->generateReceivedCode();
    }

    public function registerUser() {
        if (!$this->emptyInput()) {
            header('location: ../registerPage.php?status=emptyInput');
            exit();
        }
        if (!$this->emailNotMatch()) {
            header('location: ../registerPage.php?status=emailNotMatch');
            exit();
        }
        if (!$this->passwordNotMatch()) {
            header('location: ../registerPage.php?status=passwordNotMatch');
            exit();
        }
        if (!$this->invalidEmail()) {
            header('location: ../registerPage.php?status=invalidEmail');
            exit();
        }
        if (!$this->idTakenCheck()) {
            header('location: ../registerPage.php?status=useroremailtaken');
            exit();
        }

        // If all checks pass, proceed with user registration
        $this->setUser(
            $this->profile_pics,
            $this->first_name,
            $this->last_name,
            $this->email,
            $this->dob,
            $this->country_code,
            $this->phone_number,
            $this->terms,
            $this->privacy,
            $this->password,
            $this->received_code
        );

        // Send confirmation email
        $this->sendEmail($this->first_name, $this->last_name, $this->email, $this->received_code);
    }

    private function emptyInput() {
        // Check for empty inputs
        return !(
            empty($this->email) ||
            empty($this->first_name) ||
            empty($this->last_name) ||
            empty($this->dob) ||
            empty($this->country_code) ||
            empty($this->phone_number) ||
            empty($this->terms) ||
            empty($this->privacy) ||
            empty($this->password)
        );
    }

    private function emailNotMatch() {
        // Check if emails are the same
        return $this->email === $this->confirm_email;
    }

    private function passwordNotMatch() {
        // Check if passwords are the same
        return $this->password === $this->confirm_password;
    }

    private function invalidEmail() {
        // Validate email format
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    } 

    private function idTakenCheck() {
        // Check if username or email is already taken
        return $this->checkUser($this->email);
    }
   private function generateReceivedCode() {
    $year = date('Y'); // Current year
    $randomNumber = mt_rand(10, 99); //random number
    $genratedcode = 'YOU' . "/" . $year . "/" . $randomNumber; 
    return $genratedcode;
}

}
 