<h2>User Details</h2>
<form action="<?= $formAction ?? 'edituser.php' ?>" method="post">
  <input type="hidden" name="id" value="<?= $user['id'] ?? ''; ?>">
  
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" value="<?= htmlspecialchars($user['username'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>

  <input type="submit" value="<?= $submitValue ?? 'Save' ?>">

</form>
