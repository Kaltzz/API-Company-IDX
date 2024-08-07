<!doctype html>
<html>
    <head>
        <title>Login</title>
        <!-- Tambahkan link ke file Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
    </head>
    <body>
        <form action="aksi_login.php" method="POST" enctype="multipart/form-data">
            <label>Username</label><br>
            <input type="text" name="uname"><br/><br/>
            <label>Password</label><br>
            <input type="password" name="pwd"><br/><br/>
            <input type="submit" name="submit">
        </form>    
    </body>
</html>
