<p><?=$totalQuestions?> questions have been submitted to the Student Forum.</p>

<?php foreach($questions as $question): ?>
    <blockquote>
        <?=htmlspecialchars($question['text'], ENT_QUOTES, 'UTF-8')?>
        <br /><?=htmlspecialchars($question ['moduleName'], ENT_QUOTES, 'UTF-8')?>

        (by <a href="mailto:<?=htmlspecialchars($question ['email'], ENT_QUOTES, 'UTF-8');?>">
        <?=htmlspecialchars($question['username'], ENT_QUOTES, 'UTF-8'); ?></a>)
        
        <a href="../admin/editquestion.php?id=<?=$question['id']?>">Edit</a>

        <?php if (!empty($question['images'])): ?>
            <div>
                <img src="../images/<?= htmlspecialchars($question['images'], ENT_QUOTES, 'UTF-8') ?>" 
                    width="200" height="150">
            </div>
        <?php endif; ?>     

        <form action="../admin/deletequestion.php" method="post">
            <input type="hidden" name="id" value="<?=$question['id']?>">
            <input type="submit" value="Delete">         
</form>
</blockquote>
<?php endforeach;?>