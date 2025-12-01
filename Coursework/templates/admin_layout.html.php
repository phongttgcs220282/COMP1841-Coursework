<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../questions.css?v=1.8">
    <title><?=$title?></title>
</head>
<body>
    <header id = "admin"><h1>Student Forum<br />Manage questions, categories and authors</h1></header>
    <nav>
        <ul>
            <li><a href="../admin/index.php">Admin Site</a></li>
            <li><a href="../admin/questions.php">Question List</a></li>
            <li><a href="../admin/addquestion.php">Add a new question</a></li>
            <li><a href="../admin/users.php">Manage User</a></li>
            <li><a href="../admin/modules.php">Module List</a></li>
            <li><a href="../admin/view_contact_send.php">View Messages</a></li>
            <li><a href="basic_login/Logout.php">Public Site/Logout</a></li>
</ul>
</nav>
<main>
    <?=$output?>
</main>
<footer>$copy; IJDB 2023</footer>
</body>
</html>