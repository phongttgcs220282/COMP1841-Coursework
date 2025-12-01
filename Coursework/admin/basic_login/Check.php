<?php
session_start();
if ($_SESSION ["Authorised"] != "") {
    header("Location: Notauthorised.php");
}
?>