<?php
    header("Content-type:application/json");
    $method = $_SERVER['REQUEST_METHOD'];

    //request untuk menggunakan header untuk api_key
    $header = apache_request_headers();
    $key = $header['key'];

    //koneksi ke database
    $result = array();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bei_comp";

    $conn = new mysqli($servername, $username, $password, $dbname);

    //pengecekan api/key
    $sql = "SELECT * FROM user WHERE key_token='$key'";
    $hasil = $conn->query($sql);

    if ($hasil->num_rows > 0) {
        //pengecekan request user
        if($method=='GET'){

            $industri = $_GET['industri'];
            $sql = "SELECT * FROM comp_desc WHERE industri LIKE '%".$industri."%' ";
        
            $hasil_query = $conn->query($sql);
            $result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
            
        //method yang digunakan salah
        }else{
               $result['status'] = [
                "code" => 400,
                "description" => 'method not valid'
               ]; 
            }
    //api_key salah
    }else {
        $result['status'] = [
            "code" => 401,
            "description" => 'api/key token salah'
           ]; 
        }

    

    echo json_encode($result);
?>