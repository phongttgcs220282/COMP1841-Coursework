<?php
include '../includes/Databasequestion.php';
include '../includes/Adminfunction.php';

if (isset($_POST['id'])) {
    query($pdo, 'UPDATE user SET username = :username, email = :email WHERE id = :id', [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'id' => $_POST['id']
    ]);
    header('Location: users.php');
    exit();
}

$user = query($pdo, 'SELECT * FROM user WHERE id = :id', ['id' => $_GET['id']])->fetch();
$title = 'Edit User';

ob_start();
include '../templates/edituser.html.php';
$output = ob_get_clean();

include '../templates/admin_layout.html.php';
?>
