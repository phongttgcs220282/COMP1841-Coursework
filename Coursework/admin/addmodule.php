<?php
if(isset($_POST['moduleName'])){
    try{
        include '../includes/Databasequestion.php';
        include '../includes/Adminfunction.php';

        insertModule($pdo, $_POST['moduleName']);
        header('location: ../admin/modules.php');
    }catch (PDOException $e){
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    include '../includes/Databasequestion.php';
    include '../includes/Adminfunction.php';
    $title = 'Add Module';
    ob_start();
    include '../templates/addmodule.html.php';
    $output = ob_get_clean();
    
    include '../templates/admin_layout.html.php';}
?>