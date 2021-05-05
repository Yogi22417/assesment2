<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div style="padding-top: 50px">
  <center><h1>Form Daftar</h1></center>
<div class="container" style="border: 2px solid black; border-radius: 10px; padding: 20px">
<form action="prosesregis.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" required name="username">
  </div>
  <div class="mb-3">
    <label for="passwords" class="form-label">Password</label>
    <input type="password" class="form-control" id="passwords" name="pass">
  </div>
  <button type="submit" class="btn btn-success">Submit</button><br><br>
  <a href="login.php" class="btn btn-primary">Sudah Punya Akun ? Klik Disini</a>
</form>
</div>
</div>
</body>
</div>
</div>
</html>
