<?php

class Therapist extends Dbh
{
	
protected function setTherapist($profile_pics, $name, $email, $phone, $specialization, $experience) {
    // Check if a file was uploaded
    if(isset($_FILES['profile_pics'])) {
        $file_name = $_FILES['profile_pics']['name'];
        $file_tmp = $_FILES['profile_pics']['tmp_name'];
        $file_type = $_FILES['profile_pics']['type'];

        // Array of allowed image file types
        $allowed_image_types = array('image/jpeg', 'image/png', 'image/gif');

        // Check if the uploaded file type is allowed
        if(in_array($file_type, $allowed_image_types)) {
            // File is an image
            $uploadDirectory = '../therapist_profile/';

            // Generate a unique name for the file
            $uniqueFileName = uniqid() . '_' . $file_name;

            // Move the uploaded file to the server
            $uploadPath = $uploadDirectory . $uniqueFileName;
            if(move_uploaded_file($file_tmp, $uploadPath)) {
                // Insert the unique filename into the database
                $stmt = $this->connect()->prepare('INSERT INTO therapists (profile_pics, name, email, phone, specialization, experience) VALUES (?, ?, ?, ?, ?, ?)');

                if ($stmt) {
                    if ($stmt->execute(array($uniqueFileName, $name, $email, $phone, $specialization, $experience))) {   
                        // Success: redirect to the home page
                        header("location: ../adminaddtherapist.php?status=t_success");
                        exit();
                    } else {
                        // Database insertion failed
                        header("location: ../adminaddtherapist.php?status=stmtfailed");
                        exit();
                    }
                } else {
                    // SQL statement preparation failed
                    header("location: ../adminaddtherapist.php?status=stmtprepfailed");
                    exit();
                }
            } else {
                // File upload failed
                header("location: ../adminaddtherapist.php?status=fileuploadfailed");
                exit();
            }
        } else {
            // File type is not allowed
            header("location: ../adminaddtherapist.php?status=invalidfiletype");
            exit();
        }
    } else {
        // No file uploaded
        header("location: ../adminaddtherapist.php?status=nofileuploaded");
        exit();
    }
}
    protected function checkTherapists($email)
    {
        $stmt = $this->connect()->prepare('SELECT id FROM therapists WHERE email = ?');

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../adminaddtherapist.php?status=stmtfailed");
            exit();
        }

        $resultCheck = $stmt->rowCount() > 0 ? false : true;
        return $resultCheck;
    }
}