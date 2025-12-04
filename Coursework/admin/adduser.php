<?php
if(isset($_POST['username'])){
    try{
        include '../includes/Databasequestion.php';
        include '../includes/Adminfunction.php';

        insertUser($pdo, $_POST['username'], $_POST['email']);
        header('location: ../admin/users.php');
    }catch (PDOException $e){
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    include '../includes/Databasequestion.php';
    include '../includes/Adminfunction.php';
    $title = 'Add User';
    ob_start();
    include '../templates/adduser.html.php';
    $output = ob_get_clean();
    
    include '../templates/admin_layout.html.php';}
?>
