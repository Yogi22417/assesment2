<?php
session_start();
$username = $_POST['username'];      
$password = $_POST['pass'];

if ($username == "user" && $password == "user") {
    echo "
    <script>
    alert('Berhasil Login');
    document.location.href = 'index.php';
    </script>";
} elseif ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
	echo "
    <script>
    alert('Berhasil Login');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "
    <script>
    alert('Gagal Login');
    history.go(-1);
    </script>";
}
?>