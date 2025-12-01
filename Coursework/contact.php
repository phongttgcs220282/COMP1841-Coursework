<?php
include 'includes/Databasequestion.php';

if (isset($_POST['message'])) {
    $title = "Contact Us";
    $message = htmlspecialchars($_POST['message']);

    try {
        $stmt = $pdo->prepare("INSERT INTO messages (message, created_at) VALUES (:message, NOW())");
        $stmt->execute(['message' => $message]);
        $output = "Thank you for your message: " . $message . ". We will respond soon.";
    } catch (PDOException $e) {
        $output = "Error saving message: " . $e->getMessage();
    }
} else {
    $title = "Contact Us";
    ob_start();
    include 'templates/mailform.html.php';
    $output = ob_get_clean();
}

include 'templates/layout.html.php';
?>