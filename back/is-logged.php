<?php
    require 'main.php';

    if (isset($_SESSION['user'])) {
        http_response_code(200);
        exit();
    }
    
    http_response_code(401);
?>