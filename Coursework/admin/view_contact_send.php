<?php
include '../includes/Databasequestion.php';

$title = "View Sent Messages";

try {
    $stmt = $pdo->query("SELECT message, created_at FROM messages ORDER BY created_at DESC");
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $messages = [];
    $error = "Error retrieving messages: " . $e->getMessage();
}

ob_start();
?>
<ul>
    <?php if (isset($error)): ?>
        <li><?php echo htmlspecialchars($error); ?></li>
    <?php else: ?>
        <?php foreach ($messages as $msg): ?>
            <li><?php echo htmlspecialchars($msg['message']) . " (Sent: " . $msg['created_at'] . ")"; ?></li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>
<?php
$output = ob_get_clean();
include '../templates/admin_layout.html.php';
?>