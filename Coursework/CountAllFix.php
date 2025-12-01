<?php
include 'includes/Databasequestion.php';
function totalQuestions ($pdo){
    $query = $pdo->prepare('SELECT COUNT(*) FROM question');
    $query->execute();
    $row = $query->fetch();
    return $row[0];
}
echo totalQuestions($pdo);