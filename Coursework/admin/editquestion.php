<?php
include '../includes/Databasequestion.php';
include '../includes/Adminfunction.php';

if (isset($_POST['text'])) {
    $id = $_POST['id'];
    $text = $_POST['text'];
    $userid = $_POST['users'];
    $moduleid = $_POST['modules'];
    $images = $_POST['images'];
    if (!empty($_FILES['images']['name'])) {
    $targetDir = '../images/';
    $images = basename($_FILES['images']['name']);
    $targetFile = $targetDir . $images;
    move_uploaded_file($_FILES['images']['tmp_name'], $targetFile);
    }
    updateQuestion($pdo, $id, $text, $images, $userid, $moduleid); 
    header('location: ../admin/questions.php');
    exit();
}

if (isset($_GET['id'])) {
    $question = getQuestion($pdo, $_GET['id']);
    $users = allUsers($pdo);
    $modules = allModules($pdo);
    $images = allQuestion($pdo);
    $title = 'Edit question';
    ob_start();
    include '../templates/editquestion.html.php';
    $output = ob_get_clean();
    include '../templates/admin_layout.html.php';
}
?>
