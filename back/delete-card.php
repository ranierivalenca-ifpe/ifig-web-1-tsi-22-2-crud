<?php

    include 'main.php';

    if (!isset($_SESSION['user'])) {
        http_response_code(401);
        exit();
    }

    $id = $_POST['id'];

    $stmt = $conn->prepare('DELETE FROM cards WHERE id = ? AND user_id = ?');
    $stmt->execute([
        $id,
        $_SESSION['user']['id']
    ])

?>