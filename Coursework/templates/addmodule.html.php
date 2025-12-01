<h2>Add Module</h2>
<form action="<?= $formAction ?? 'addmodule.php' ?>" method="post">
  <input type="hidden" name="id" value="<?= $module['id'] ?? ''; ?>">
  
  <label for="moduleName">Module Name:</label>
  <input type="text" id="moduleName" name="moduleName" value="<?= htmlspecialchars($module['moduleName'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>

  <input type="submit" value="<?= $submitValue ?? 'Save' ?>">
</form>