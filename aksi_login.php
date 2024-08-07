<?php
session_start();

$uname = $_POST['uname'];
$pwd = $_POST['pwd'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bei_comp";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM user WHERE username = '$uname' AND password = '$pwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['uname'] = $uname;
    $_SESSION['pwd'] = $pwd;
} else {
    header('Location: http://[::1]/apibei/login.php');
    exit();
}


?>
<html>

<head>
    <title>ini login ya ajg</title>

    <link href=" assets/bootstrap.css" rel="stylesheet">

</head>

<body>

    <section class="vh-100 bg-dark">
        <nav class="navbar navbar-expand-sm bg-dark warnatext fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapsse text-white navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li>
                            WELCOME <?php echo $_SESSION['uname']; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class=" mt-10 bg-dark" style="margin-top: 10px;">
            <div class="mt-100px p-5 text-white bg-dark" style="padding-left: 100%;padding-right: 100%; padding-bottom: 100%">
                <div class="row">
                </div>
                <div class="container-flex mt-3">
                    <div class="row">
                        <div class="col p-6 bg-secondary text-white" style="height:500px;">
                            <div class="container-fluid" style="margin-top:80px">
                                <div class="container mt-3" align="center">
                                    <div class="card-outline-green" style="width:300px; border: 5px solid light">
                                        <img class="card-img-top" src="images/token.png" alt="Card image" style="width:50%; align-self: center; margin-bottom: 20px; margin-top: 30px; border-radius: 10px;">
                                        <br>
                                        <form action="user_generate_key.php" method="POST">
                                            <input type="hidden" name="uname" value="<?php echo $_SESSION['uname']; ?>">
                                            <input type="hidden" name="pwd" value="<?php echo $_SESSION['pwd']; ?>">
                                            <input style="font-weight:1000" class=" btn backgroundss5 text-dark" type="submit" name="submit" value="DAPATKAN TOKEN">
                                        </form>
                                        <div class="card-body">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col p-6 bg-secondary text-white">
                            <div class="container-fluid" style="margin-top:80px">
                                <div class="container mt-3" align="center">
                                    <div class="card-outline-green" style="width:300px; border: 5px solid light">
                                        <img class="card-img-top" src="images/paper.png" alt="Card image" style="width:50%; align-self: center; margin-bottom: 20px; margin-top: 30px; border-radius: 10px;">
                                        <br>
                                        <a style="font-weight:1000" class=" btn text-dark" href="comp_desc.html">LIHAT DOKUMENTASI</a>
                                        <div class="card-body">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>

            </div>
    </section>
</body>

</html>