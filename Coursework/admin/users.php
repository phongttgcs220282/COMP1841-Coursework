<?php
try{
    include '../includes/Databasequestion.php';
    include '../includes/Adminfunction.php';
    
    $sql = 'SELECT * FROM user';
    $users = allUsers($pdo);
    $title = 'Manage Admin Users';
    $totalUsers = totalUsers($pdo);

    ob_start();
    include '../templates/users.html.php';
    $output = ob_get_clean();
}catch (PDOException $e) {
    $title = 'An error has occured';
    $output= 'Database error: '. $e->getMessage();
}
include '../templates/admin_layout.html.php';