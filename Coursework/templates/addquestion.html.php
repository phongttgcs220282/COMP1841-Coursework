<form action="" method="post">
    <label for='text'>Type your question here;</label>
    <textarea name="text" rows="3" cols="40"></textarea>

    <select name = "users">
        <option value = "">select an user</option>
        <?php foreach ($users as $user): ?>
            <option value="<?=htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'); ?>
        </option>
        <?php endforeach;?>
    </select>

    <select name = "modules">
        <option value = "">select an module</option>
        <?php foreach ($modules as $module): ?>
            <option value="<?=htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8'); ?>
        </option>
        <?php endforeach;?>
    </select>

    <select name = "images">
        <option value = "">select an image</option>
        <?php foreach ($images as $image): ?>
            <option value="<?=htmlspecialchars($image['images'], ENT_QUOTES, 'UTF-8'); ?>">
                <?=htmlspecialchars($image['images'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
            <?php endforeach;?>

    <hr>

    <?php if (!empty($question['images'])): ?>
        <p><strong>Current Image:</strong></p>
        <img src="uploads/<?= htmlspecialchars($question['images']); ?>" 
             alt="Current Image" 
             style="max-width:150px; border-radius:8px;">
        <br><br>
    <?php endif; ?>

    <label for="imageUpload">Upload a new image (optional):</label>
    <input type="file" name="imageUpload" accept="image/*">
    </select>
    <input type="submit" name="submit" value="Add">    
</form>