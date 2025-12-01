<?php
if(isset($_POST['text'])){
    try{
        include '../includes/Databasequestion.php';
        include '../includes/Adminfunction.php';

        insertQuestion($pdo, $_POST['text'], $_POST['userid'], $_POST['moduleid'], $_POST['images']);
        header('location: ../admin/questions.php');
    }catch (PDOException $e){
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include '../includes/Databasequestion.php';
    include '../includes/Adminfunction.php';
    $title = 'Add a new question';
    $users = allUsers($pdo);
    $modules = allModules($pdo);
    $images = allQuestion($pdo);
    ob_start();
    include '../templates/addquestion.html.php';
    $output = ob_get_clean();
}
include '../templates/admin_layout.html.php';