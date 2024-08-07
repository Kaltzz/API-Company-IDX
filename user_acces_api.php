<?php

$header = apache_request_headers();

$key = $header['key'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bei_comp";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM user WHERE key_token='$key'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "key/token valid";
} else {
    echo "key/token tidak valid";
    exit();
}


?>