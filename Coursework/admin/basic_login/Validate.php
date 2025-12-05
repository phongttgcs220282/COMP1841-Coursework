<?php
session_start();

$ActualEmail = "phongttgcs220282@fpt.edu.vn";
$ActualPassword = "secret";

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if ($email === $ActualEmail && $password === $ActualPassword) {

        $_SESSION["Authorised"] = "Y";

        header("Location: ../index.php");
        exit();

    } else {
        header("Location: Wrongpassword.php");
        exit();
    }

} else {
    header("Location: ../index.php?error=missing_fields");
    exit();
}
?>
