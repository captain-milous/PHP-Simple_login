<?php
    $servername = "localhost";
    $username = "rootJecna";
    $password = "jecna13579*";
    $db_name = "php-login";

    $conn = new mysqli($servername, $username, $password, $db_name, 3306);
    if($conn->connect_error) {
        die('<script>alert(' + "Connection error".$conn->connect_error + '</script>');
    }
    echo '<script>console.log("Connection Successful");</script>';
?>