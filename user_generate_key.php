<?php

    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];


    $token = md5($uname.$pwd);

    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bei_comp";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "UPDATE user SET key_token = '$token' WHERE username = '$uname' AND password = '$pwd'";
    $result = $conn->query($sql);

    echo "Key/Token anda adalah     ".$token;

?>