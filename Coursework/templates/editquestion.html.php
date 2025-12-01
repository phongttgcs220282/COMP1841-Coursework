<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= htmlspecialchars($question['id'] ?? '', ENT_QUOTES); ?>">

    <label for='text'>Edit your question here</label>
    <textarea name="text" rows="3" cols="40"><?=htmlspecialchars($question['text'] ?? '', ENT_QUOTES);?></textarea>

    <select name = "users">
        <option value = "">select an user</option>
        <?php foreach ($users as $user): ?>
            <option value="<?=htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>"
            <?php if ($user['id'] == $question['userid']) echo 'selected'; ?>>
            <?=htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'); ?>
        </option>
        <?php endforeach;?>
    </select>

    <select name = "modules">
        <option value = "">select an module</option>
        <?php foreach ($modules as $module): ?>
            <option value="<?=htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8'); ?>"
            <?php if ($module['id'] == $question['moduleid']) echo'selected'; ?>>
            <?=htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8'); ?>
        </option>
        <?php endforeach;?>
    </select>

    <select name = "images">
        <option value = "">select an image</option>
        <?php foreach ($images as $image): ?>
            <option value="<?=htmlspecialchars($image['images'], ENT_QUOTES, 'UTF-8'); ?>"
            <?php if ($image['images']) echo'selected'; ?>>
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
    <input type="submit" name="submit" value="Save">
</form>
