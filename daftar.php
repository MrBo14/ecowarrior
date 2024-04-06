<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Akaun | MySistem</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" style="background-image:url(../img/533007.png)">
<div class="login-box">

<!-- /.login-logo -->
<div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="daftar.php" class="h1"><b>My</b>Sistem</a>
    </div>

    <div class="card-body">
        <div class="album mb-3 bg-light text-center">

        <img style="border-color: black;" height="100%" width="100%" src="../img/minaa.png"  alt="User profile picture">

      <br>
    </div>


      <h3 class="login-box-msg" style="color:black">Buat Akaun Baru</h3>

      <form action="tambahuser.php" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
        <div class="input-group mb-3">
          <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="form-control"  id="exampleInputFile" name="propic" required>
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>

            <div class="input-group-append"></div>
        </div>

        <div class="d-flex justify-content-center mb-6">
            <div class="modal-footer">
              <a href="index.php" class="btn btn-secondary">Kembali</a>
              <button type="submit" class="btn btn-primary">Daftar</button>
              <!--- <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button> --->
            </div>
          </div>
      </form>


  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });
  </script>
  <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
</body>
</html>
