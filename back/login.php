<?php
    require 'main.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT * FROM users WHERE username = :user AND password = :pw');
    $stmt->execute([
        'user' => $username, 
        'pw' => $password
    ]);

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (sizeof($data) == 0) {
        http_response_code(401);
        exit();
    }

    $user = $data[0];
    $_SESSION['user'] = $user;
    http_response_code(200);
?>