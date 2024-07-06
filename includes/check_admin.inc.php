<?php
    session_start();


    include './classes/dbh.classes.php';
    
    if ($_SESSION['role'] != "1") {
        header("Location: includes/logout.inc.php");
        exit();
    }
    
    include "./classes/viewtherapist.classes.php";
    include "./classes/viewusers.classes.php";
  