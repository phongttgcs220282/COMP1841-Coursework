<?php
include '../includes/Databasequestion.php';

function query($pdo, $sql, $parameters = []){
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}
function totalQuestions ($pdo){
    $query = query($pdo, 'SELECT COUNT(*) FROM question');
    $row = $query->fetch();
    return $row[0];
}
function getQuestion($pdo, $id){
    $parameters = [':id' => $id];
    $query = query($pdo, 'SELECT * FROM question WHERE id = :id', $parameters);
    return $query->fetch();
}

function updateQuestion($pdo, $id, $text, $images, $userid, $moduleid) {
    $query = 'UPDATE question SET text = :text, images = :images, userid = :userid, moduleid = :moduleid WHERE id = :id';
    $parameters = [':id' => $id, ':text' => $text, ':images' => $images, ':userid' => $userid, ':moduleid' => $moduleid];
    query($pdo, $query, $parameters);
}
function deleteQuestion($pdo, $id){
    $parameters = [':id'=> $id];
    query($pdo, 'DELETE FROM question WHERE id = :id', $parameters);
}

function insertQuestion($pdo, $text, $userid, $moduleid, $images){
    $query = 'INSERT INTO question(text, date, userid, moduleid, images) VALUES (:text, CURDATE(), :userid, :moduleid, :images)';
    $parameters = [':userid' => $userid, ':text' => $text, ':moduleid' => $moduleid, ':images' => $images];
    query($pdo, $query, $parameters);
}

function allQuestion($pdo){
    $questions = query($pdo, 'SELECT question.id, question.text, question.date, question.images, question.userid, question.moduleid, user.username, user.email, module.moduleName FROM question INNER JOIN user ON question.userid = user.id INNER JOIN module ON question.moduleid = module.id');
    return $questions->fetchAll();
}

function allUsers($pdo){
    $users = query($pdo, 'SELECT * FROM user');
    return $users->fetchAll();
}

function totalUsers ($pdo){
    $query = query($pdo, 'SELECT COUNT(*) FROM user');
    $row = $query->fetch();
    return $row[0];
}

function getUser($pdo, $id){
    $parameters = [':id' => $id];
    $query = query($pdo, 'SELECT * FROM user WHERE id = :id', $parameters);
    return $query->fetch();
}

function updateUser($pdo, $id, $username, $email, $password) {
    $query = 'UPDATE user SET username = :username, email = :email, password = :password WHERE id = :id';
    $parameters = [':id' => $id, ':username' => $username, ':email' => $email, ':password' => $password];
    query($pdo, $query, $parameters);
}

function deleteUser($pdo, $id){
    $parameters = [':id'=> $id];
    query($pdo, 'DELETE FROM user WHERE id = :id', $parameters);
}

function insertUser($pdo, $username, $email, $password){
    $query = 'INSERT INTO user(username, email, password) VALUES (:username, :email, :password)';
    $parameters = [':username' => $username, ':email' => $email, ':password' => $password];
    query($pdo, $query, $parameters);
}

function allModules($pdo) {
	$modules = query($pdo, 'SELECT * FROM module');
	return $modules->fetchAll();
}

function totalModules($pdo) {
    $sql = 'SELECT COUNT(*) FROM module';
    $stmt = $pdo->query($sql);
    return $stmt->fetchColumn();
}
function getModule($pdo, $id) {
    $parameters = [':id' => $id];
    $query = query($pdo, 'SELECT * FROM module WHERE id = :id', $parameters);
    return $query->fetch();
}
function insertModule($pdo, $moduleName) {
    $query = 'INSERT INTO module(moduleName) VALUES (:moduleName)';
    $parameters = [':moduleName' => $moduleName];
    query($pdo, $query, $parameters);
}
function updateModule($pdo, $id, $moduleName) {
    $query = 'UPDATE module SET moduleName = :moduleName WHERE id = :id';
    $parameters = [':id' => $id, ':moduleName' => $moduleName];
    query($pdo, $query, $parameters);
}
function deleteModule($pdo, $id) {
    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM module WHERE id = :id', $parameters);
}

