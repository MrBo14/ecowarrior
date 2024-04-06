<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EcoWarrior</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-image: url(../img/1049330.jpg);">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>Eco</b>Warrior</a>
    </div>
    <div class="card-body">
    <div class="album mb-3 bg-light text-center">

        <img style="border-color: black;" height="100%" width="100%" src="../img/minaa.png"  alt="User profile picture">

      <br>
    </div>

    <form action="login.php" method="post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>

      <div class="input-group mb-3">
        <input type="password" class="form-control" name="pwd" placeholder="Kata Laluan" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col text-center">
          <button type="submit" name="submit" class="btn btn-primary btn-block">Log Masuk</button>
        </div>
        <!-- /.col -->

      </div>
    </form>

      <br>
      <p class="mb-1">
        <a href="forgot-password.php">Terlupa Kata Laluan?</a>
      </p>
      <p class="mb-1">
      <a href="#" data-toggle="modal" data-target="#pass_signup">Daftar Masuk</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


<?php include 'modal.php';?>


<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
