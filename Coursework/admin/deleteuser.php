<?php
try{
    include '../includes/Databasequestion.php';
    include '../includes/Adminfunction.php';

    deleteUser($pdo, $_POST['id']);
    header('location: ../admin/users.php');
}catch(PDOException $e){
    $title = 'An error has occured';
    $output = 'Unable to connect to delete user ' .$e->getMessage();
}
include '../templates/admin_layout.html.php';