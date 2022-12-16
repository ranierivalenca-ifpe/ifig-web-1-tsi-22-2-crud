<?php
    header('Access-Control-Allow-Origin: *');

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $dsn = 'mysql:dbname=web1tsi;host=127.0.0.1;port=3307';
    $conn = new PDO($dsn, 'root', 'root');

    // $conn->query("INSERT INTO users(username, password) VALUES ('$username', '$password')");
    $stmt = $conn->prepare('INSERT INTO users(username, password) VALUES (?, ?)');
    $stmt->execute([$username, $password]);

    http_response_code(201);
?>