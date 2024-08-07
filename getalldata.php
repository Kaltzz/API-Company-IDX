<?php
    header("Content-type:application/json");

    $method = $_SERVER['REQUEST_METHOD'];

    $result = array();

    if($method=='GET'){
        $result['status'] = [
            "code" => 200,
            "description" => "request valid"
        ];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "perusahaan_bei";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "SELECT * FROM daftar_perusahaan";

    $hasil_query = $conn->query($sql);
    $result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);

    }else{
       $result['status'] = [
        "code" => 400,
        "description" => 'method not valid'
       ]; 
    }

    echo json_encode($result);
?>