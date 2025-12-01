<?php
try{
    include '../includes/Databasequestion.php';
    include '../includes/Adminfunction.php';

    deleteQuestion($pdo, $_POST['id']);
    header('location: ../admin/questions.php');
}catch(PDOException $e){
    $title = 'An error has occured';
    $output = 'Unable to connect to delete question ' .$e->getMessage();
}
include '../templates/admin_layout.html.php';