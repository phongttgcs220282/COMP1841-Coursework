<?php
try{
    include '../includes/Databasequestion.php';
    include '../includes/Adminfunction.php';
    
    $sql = 'SELECT question.id, question.text, question.date, question.images, question.userid, question.moduleid, user.username, user.email, module.moduleName FROM question INNER JOIN user ON userid = user.id INNER JOIN module ON moduleid = module.id';
    $questions = allQuestion($pdo);
    $title = 'Questions list';
    $totalQuestions = totalQuestions($pdo);

    ob_start();
    include '../templates/question2.html.php';
    $output = ob_get_clean();
}catch (PDOException $e) {
    $title = 'An error has occured';
    $output= 'Database error: '. $e->getMessage();
}
include '../templates/admin_layout.html.php';