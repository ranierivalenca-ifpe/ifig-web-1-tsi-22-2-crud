<?php
    require 'main.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // $conn->query("INSERT INTO users(username, password) VALUES ('$username', '$password')");
    $stmt = $conn->prepare('INSERT INTO users(username, password) VALUES (?, ?)');
    $stmt->execute([$username, $password]);

    http_response_code(201);
?>