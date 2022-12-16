<?php
    header('Access-Control-Allow-Origin: http://localhost:5173');
    header('Access-Control-Allow-Credentials: true');

    $dsn = 'mysql:dbname=web1tsi;host=127.0.0.1;port=3307';
    $conn = new PDO($dsn, 'root', 'root');

    session_start();
?>