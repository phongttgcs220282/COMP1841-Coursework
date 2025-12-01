<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="questions.css?v=1.8">
    <title><?=$title?></title>
</head>
<body>
    <header id = "admin"><h1>Student Forum</h1></header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="questions.php">Question List</a></li>
            <!-- <li><a href="addquestion.php">Add a new question</a></li> -->
            <li><a href="admin/basic_login/Login.html">Admin Login</a></li>
            <li><a href="contact.php">Contact Us</a></li>
</ul>
</nav>
<main>
    <?=$output?>
</main>
<footer>$copy; IJDB 2023</footer>
</body>
</html>