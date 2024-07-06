<?php
include "../classes/dbh.classes.php";
include "../classes/dbhpublic.classes.php";

// Check if the request method is GET and email parameter is set
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["email"])) {
    // Sanitize the input to prevent SQL injection
    $email = $_GET["email"];

    try {
        // Create a new instance of DbhPublic class and get the PDO connection
        $dbhPublic = new DbhPublic();
        $pdo = $dbhPublic->getConnection();

        // Prepare the SQL statement to delete the user record
        $sql = "DELETE FROM therapists WHERE email = :email";
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        // Execute the SQL statement
        $stmt->execute();

        // Check if any rows were affected
        if ($stmt->rowCount() > 0) {
            header("location: ../adminaddtherapist.php?status=th_deleted");
            exit();
        } else {
            header("location: ../adminaddtherapist.php?status=th_not_found");
            exit();
        }
    } catch (PDOException $e) {
        header("location: ../adminaddtherapist.php?status=database_error");
        exit();
    }
}
?>
