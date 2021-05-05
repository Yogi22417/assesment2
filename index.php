
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>About - Yogi</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-sm bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">About Me</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#IP">IP</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-4" src="saya1.jpg" alt="..." style="border-radius: 100%; border: 5px solid black;" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Sihombing Yogi Saputra</h1>
                <h2 class="masthead-subheading text-uppercase mb-0">6701190076</h2>
                <h2 class="masthead-subheading text-uppercase mb-0">D3SI-43-03</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Impian : Full Stack Dev <br> Mahasiswa - Telkom University - 2019 <br> Tahun Depan Lulus Amin (2022)</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="IP">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">IP Semester</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <a href="inputipk.php" class="btn btn-primary" style="margin-bottom: 20px"> Tambah Data</a>
                <table class="table table-dark table-striped">
                    <tr>
                    <th scope="col">Semester</th>
                    <th scope="col">IP</th>
                    <th scope="col">Action</th>
                  </tr>
                    <?php 
                    include 'koneksi.php';
                    $pilihan = mysqli_query($db, 'SELECT * FROM pabweb');
                    foreach ($pilihan as $baris) {
                    echo "
                    <tr>
                    <td >".$baris['semester']."</td>
                    <td >".$baris['ip']."</td>
                        <td>
                        <a href='editip.php?semester=".$baris['semester']."' class='btn btn-primary btn-sm'>Edit</a>
                        <a href='prosesdelete.php?semester=".$baris['semester']."' class='btn btn-danger btn-sm'>Delete</a></td>
                        "; 
                        ?>
                        <?php 
                        echo "
                        </tr>";
                          }
                        ?>
                    </table>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
<!-- Modal -->
<form action="prosesedit.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
          <div class="mb-3">
            <label for="semester" class="form-label" >Semester</label>
            <input type="text" class="form-control" name="semester" id="semester" value="<?php echo $semester ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="ip" class="form-label" >IPK</label>
            <input type="text" class="form-control" name="ip" id="ip"  value="<?php echo $ip ?>">
          </div>
      </div>
      <div class="modal-footer">
        <input type='submit' name='submit' value='Submit' class="btn btn-success">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
</form>
</body>
</html>
