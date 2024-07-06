<?php
class TherapistContr extends Therapist {
    

    public function handleTherapist($profile_pics, $name, $email, $phone, $specialization, $experience) {
        // Validation
        if (empty($name) || empty($email) || empty($phone) || empty($specialization) || empty($experience)) {
            // Both body and file are empty
            header("location: ../adminaddtherapist.php?status=allfieldrequired");
            exit();
        }
        if (!$this->idTakenCheck($email)) {
            header('location: ../adminaddtherapist.php?status=useroremailtaken');
            exit();
        }

        // Process post content
        $this->setTherapist($profile_pics, $name, $email, $phone, $specialization, $experience);

        // Redirect to success page
        header("location: ../adminaddtherapist.php?status=t_success");
        exit();
    }
   private function idTakenCheck($email) {
        // Check if email is already taken
        return $this->checkTherapists($email);
    }

}