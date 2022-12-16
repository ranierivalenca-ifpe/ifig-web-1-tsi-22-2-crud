<?php
    include 'main.php';

    if (!isset($_SESSION['user'])) {
        http_response_code(401);
        exit();
    }

    $name = $_POST['name'];

    $stmt = $conn->prepare('INSERT INTO cards (name, user_id) VALUES (?, ?)');
    $stmt->execute([
        $name,
        $_SESSION['user']['id']
    ]);
?>