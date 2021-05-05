<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/datatables-demo.js"></script>
</head>
<body>
<div style="padding-top: 50px">
  <center><h1>Form Login</h1><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="fas fa-question-circle"></i></button></center><br>
<div class="container" style="border: 2px solid black; border-radius: 10px; padding: 20px">
<form action="proseslogin.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" required name="username">
  </div>
  <div class="mb-3">
    <label for="passwords" class="form-label">Password</label>
    <input type="password" class="form-control" id="passwords" name="pass">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button><br><br>
  <a href="register.php" class="btn btn-primary">Belum Punya Akun ? Klik Disini</a>
</form>
</div>
</div>
    <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <!-- konten modal-->
          <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
              <h4 class="modal-title">About Login</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
              <p>1. Login Bisa Menggunakan Akun Bebas</p>
              <p>Username  : user</p>
              <p>Password : user</p>
              <p>2. Registrasi Bisa Dipakai Karena Menggunakan Session</p>
              <p>3. Masukkan Username dan Password Yang Sudah Dipakai</p>
            </div>
            <!-- footer modal -->
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Mengerti</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</body>
</html>
