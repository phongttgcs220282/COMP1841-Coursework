<?php
include '../includes/Databasequestion.php';
include '../includes/Adminfunction.php';

if (isset($_POST['id'])) {
    query($pdo, 'UPDATE module SET moduleName = :moduleName WHERE id = :id', [
        ':moduleName' => $_POST['moduleName'],
        'id' => $_POST['id']
    ]);
    header('Location: modules.php');
    exit();
}

$module = query($pdo, 'SELECT * FROM module WHERE id = :id', ['id' => $_GET['id']])->fetch();
$title = 'Edit Module';

ob_start();
include '../templates/editmodule.html.php';
$output = ob_get_clean();

include '../templates/admin_layout.html.php';
?>