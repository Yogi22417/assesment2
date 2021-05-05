<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <?php 
    include "koneksi.php";
        $semester = $_GET['semester']; 
        $stmt = $db->prepare("SELECT * FROM pabweb WHERE semester = ?");
        $stmt->bind_param("i", $semester);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 0) exit('No rows');
        while($baris = $result->fetch_assoc()){
            $semester = $baris["semester"];
            $ip = $baris["ip"];
        }
    ?>
<div style="padding-top: 50px">
  <center><h1>Form Input IP</h1></center>
<div class="container" style="border: 2px solid black; border-radius: 10px; padding: 20px">
<form action="prosesedit.php" method="POST">
  <div class="mb-3">
    <label for="semester" class="form-label" >Semester</label>
    <input type="text" class="form-control" name="semester" id="semester" value="<?php echo $semester ?>" readonly>
  </div>
  <div class="mb-3">
    <label for="ip" class="form-label" >IPK</label>
    <input type="text" class="form-control" name="ip" id="ip"  value="<?php echo $ip ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="index.php?#IP" class="btn btn-danger">Kembali</a>
</form>
</div>
</div>
</body>
</html>