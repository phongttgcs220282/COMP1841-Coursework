<p><?=$totalUsers?> Users have been registered in the system.</p>
<form action="../admin/adduser.php" method="post">
    <input type="submit" value="Add New User">   

<?php foreach($users as $user): ?>
    <blockquote>
        <?=htmlspecialchars($user ['username'], ENT_QUOTES, 'UTF-8')?>

        (by <a href="mailto:<?=htmlspecialchars($user ['email'], ENT_QUOTES, 'UTF-8');?>">
        <?=htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8'); ?></a>)
        
        <a href="../admin/edituser.php?id=<?=$user['id']?>">Edit</a>

        <form action="../admin/deleteuser.php" method="post">
            <input type="hidden" name="id" value="<?=$user['id']?>">
            <input type="submit" value="Delete">         
</form>
</blockquote>
<?php endforeach;?>