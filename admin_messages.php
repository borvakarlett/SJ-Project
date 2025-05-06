<?php
include('_inc/partials/head.php');

//requires admin to be logged in
$auth->requireAdminLogin();

$db = new Database();
$pdo = $db->getConnection();

$msgObj = new Messages($pdo); 

//if want to delete then use the delete message function and redirect back to this page
if (isset($_GET['delete_id'])) {
    $msgObj->deleteMessage($_GET['delete_id']);
    header("Location: admin_messages.php");
    exit;
}

$messages = $msgObj->getAllMessages();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Manage Messages</title>
    <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
<div id="templatemo_content">
    <div class="admin_topbar">
        <h2>All Messages</h2>
        <div class="right_buttons">
            <a href="admin_main.php" class="submit_button">Back to Dashboard</a>
        </div>
    </div>

    <?php if (($messages)): ?>
        <!--print every message with user name and email and the message also with option to delete the message-->
        <?php foreach ($messages as $message): ?>
            <div class="post_section">
                <h3><?= htmlspecialchars($message['name']) ?> (<?= htmlspecialchars($message['email']) ?>)</h3>
                <p><strong>Date:</strong> <?= date('F j, Y H:i', strtotime($message['created_at'])) ?></p>
                <p><?= nl2br(htmlspecialchars($message['message'])) ?></p>
                <a href="?delete_id=<?= $message['id'] ?>" class="submit_button logout_button">Delete</a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No messages found.</p>
    <?php endif; ?>
</div>
</body>
</html>
