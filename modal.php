<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


<div class="container">



  <!-- The Modal -->
  <div class="modal fade" id="pass_signup" >
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header d-flex justify-content-center">
            <h4 class="modal-title">Sila Masukkan Pin!!!</h4>
        </div>

        <form method="post" action="pinadmin.php">
            <!-- Modal body -->
            <div class="modal-body">
            <div style="text-align: center;" class="form-group mb-2 mt-2 ml-2 mr-2">
                <input type="password" name="pin" placeholder="Pin" required><br>
                <span style="color: red;">Duluuu</span>
            </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button name="submit" type="submit" class="btn btn-primary">OK</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </form>
      </div>
    </div>
  </div>

</div>

</body>


<!--- MODAL Sign Up --->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background:#FCFBF0">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="color:black">DAFTAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>

      <div class="modal-body" >
        <form action="tambahuser.cfm" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control-modal" id="exampleInputEmail1" name="username" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control-modal" id="exampleInputPassword1" name="pwd" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Profile Picture</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" id="propic" name="propic">
                  <label for="myFile" ></label>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

        </div>

        <div class="d-flex justify-content-center mb-4">
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Daftar</button>
            <!--- <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button> --->
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
