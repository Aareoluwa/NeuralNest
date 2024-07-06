<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Register extends Dbh
{
    protected function sendEmail($first_name, $last_name, $email, $received_code)
    {
        // Load Composer's autoloader
        require '../vendor/autoload.php';

        try {
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth   = true; // Enable SMTP authentication
            $mail->Username   = 'joshuaadeyemi445@gmail.com'; // SMTP username
            $mail->Password   = 'yrkddeezyduwkodd'; // App-specific password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
            $mail->Port       = 465; // TCP port to connect to
 
            //Recipients
            $mail->setFrom('joshuaadeyemi445@gmail.com', 'YOUCARE'); // Fixed sender name
            $mail->addAddress($email);

            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'YOUCARE Registration';
            $email_template  = "<strong>Dear ". $first_name . ' ' . $last_name ."!</strong><br/>"
                             . "<p>Your Registration has been Successful:</p>"
                             . "<p>Your Received Code to Login: " . $received_code . "</p>"
                             . "<p>Thank you!</p>"
                             . "<br/><b>YouCare Team</b>";
            $mail->Body = $email_template;

            // Attempt to send the email
            if ($mail->send()) {
                header("location: ../loginPage.php?status=emailsent");
                exit();
            } else {
                header("location: ../loginPage.php?status=sentemailfailed&error=" . urlencode($mail->ErrorInfo));
                exit();
            }
        } catch (Exception $e) {
            header("location: ../loginPage.php?status=sentemailfailed&error=" . urlencode($e->getMessage()));
            exit();
        }
    }

    protected function setUser($profile_pics, $first_name, $last_name, $email, $dob, $country_code, $phone_number, $terms, $privacy, $password, $received_code)
    {
        // Hash the password
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        $uploadStatus = ""; // To store debug messages

        // Check if a file was uploaded
        if(isset($_FILES['profile_pics'])) {
            $file_name = $_FILES['profile_pics']['name'];
            $file_tmp = $_FILES['profile_pics']['tmp_name'];
            $file_type = $_FILES['profile_pics']['type'];
            $file_size = $_FILES['profile_pics']['size']; // Get the file size
            // Array of allowed image file types
            $allowed_image_types = array('image/jpeg', 'image/png', 'image/gif');

            // $max_file_size = 2 * 1024 * 1024; // 2MB in bytes
            // if ($file_size > $max_file_size) {
            //     // Resize the image to reduce file size
            //     $profile_pics = new Imagick($file_tmp);
            //     $profile_pics->setImageCompressionQuality(80); // Adjust the  quality 
            //     $profile_pics->writeImage($file_tmp);
            // }

            // Check if the uploaded file type is allowed
            if(in_array($file_type, $allowed_image_types)) {
                // File is an image
                $uploadDirectory = '../avatars/';

                // Generate a unique name for the file
                $uniqueFileName = uniqid() . '_' . $file_name;

                // Move the uploaded file to the server
                $uploadPath = $uploadDirectory . $uniqueFileName;

                if (!move_uploaded_file($file_tmp, $uploadPath)) {
                    // Error in moving the file
                    header("location: ../registerPage.php?status=fileuploaderror");
                    exit();
                }
            } else {
                // File type is not allowed
                header("location: ../registerPage.php?status=invalidfiletype");
                exit();
            }
        } else {
                // File type is not allowed
                header("location: ../registerPage.php?status=ppnotuploaded");
                exit();
            }

        // Debug output for file upload status
        echo "Debug: $uploadStatus";

        // Prepare the SQL statement
        $stmt = $this->connect()->prepare('INSERT INTO users (profile_pics, first_name, last_name, email, dob, country_code, phone_number, terms, privacy, password, received_code)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');

        // Bind the parameters and execute the statement
        if (!$stmt->execute(array($uniqueFileName, $first_name, $last_name, $email, $dob, $country_code, $phone_number, $terms, $privacy, $hashedPwd, $received_code))) {
            $stmt = null;
            header("location: ../registerPage.php?status=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($email)
    {
        $stmt = $this->connect()->prepare('SELECT id FROM users WHERE email = ?');

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../register.php?status=stmtfailed");
            exit();
        }

        $resultCheck = $stmt->rowCount() > 0 ? false : true;
        return $resultCheck;
    }

    protected function getUserId($email)
    {
        $stmt = $this->connect()->prepare('SELECT id FROM users WHERE email = ?;');

        $stmt->execute([$email]); // Execute the prepared statement

        if ($stmt->rowCount() == 0) {
            // If no user is found, redirect with an appropriate status
            header("location: ../registerPage.php?status=stmtfailed");
            exit();
        }

        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        return $userData['id']; 
    }
}
