<?php
try{
    include '../includes/Databasequestion.php';
    include '../includes/Adminfunction.php';

    deleteModule($pdo, $_POST['id']);
    header('location: ../admin/modules.php');
}catch(PDOException $e){
    $title = 'An error has occured';
    $output = 'Unable to connect to delete module ' .$e->getMessage();
}
include '../templates/admin_layout.html.php';