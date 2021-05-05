<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<div style="padding-top: 50px">
  <center><h1>Form Input IP</h1></center>
<div class="container" style="border: 2px solid black; border-radius: 10px; padding: 20px">
<form action="inputproses.php" method="POST">
  <div class="mb-3">
    <label for="semester" class="form-label" >Semester</label>
    <input type="text" class="form-control" name="semester" id="semester">
  </div>
  <div class="mb-3">
    <label for="ip" class="form-label" >IPK</label>
    <input type="text" class="form-control" name="ip" id="ip">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="index.php?#IP" class="btn btn-danger">Kembali</a>
</form>
</div>
</div>
</body>
</html>