<?php
$ActualEmail = "phongttgcs220282@fpt.edu.vn";
$ActualPassword = "secret";

    if ($_POST["email"] === $ActualEmail && $_POST["password"] === $ActualPassword) {

        session_start();
        $_SESSION["Authorised"] = "Y";
        header("Location: ../index.php");
        exit();
        
    } else {
        header("Location: Wrongpassword.php");
        exit();
    }
?>