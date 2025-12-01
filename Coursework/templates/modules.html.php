<p><?=$totalModules?> Modules have been added in the system.</p>
<form action="../admin/addmodule.php" method="post">
    <input type="submit" value="Add New Module">   

<?php foreach($modules as $module): ?>
    <blockquote>
        <?=htmlspecialchars($module ['moduleName'], ENT_QUOTES, 'UTF-8')?>
        
        <a href="../admin/editmodule.php?id=<?=$module['id']?>">Edit</a>

        <form action="../admin/deletemodule.php" method="post">
            <input type="hidden" name="id" value="<?=$module['id']?>">
            <input type="submit" value="Delete">         
</form>
</blockquote>
<?php endforeach;?>