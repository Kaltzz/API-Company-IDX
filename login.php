<html>

<head>
    <title>Login</title>

    <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body>
<section class="vh-100 bg-dark">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-secondary text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-2">
              <form action="aksi_login.php" method="POST" enctype="form-data">
  
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-dark-50 mb-5">Masukkan Username dan Password</p>
  
                <div class="form-outline form-white mb-4">
                  <label class="form-label">Username</label>
                  <input type="text" name="uname" class="form-control form-control-lg" />
                </div>
  
                <div class="form-outline form-white mb-4">
                  <label class="form-label">Password</label>
                  <input type="password" name="pwd" class="form-control form-control-lg" />
                </div>
                <br>
                <button class="btn custom_3 btn-lg px-5" type="submit" >Login</button>
                
              </form>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
  </html>