<?php 
include "koneksi.php";

$semester = $_POST['semester'] ;
$ip = $_POST['ip'] ;

$stmt = $db->prepare("INSERT INTO pabweb (semester, ip) VALUES (?,?)");
$stmt->bind_param("ss",$semester, $ip);
$stmt->execute();
$stmt->close();

if(!$stmt){
	echo "<script>
    alert ('Gagal Menambahkan Data');
	</script>";
}else {
	echo "<script>
alert ('Data berhasil ditambah');
	</script>";
}
 
header("location:index.php#IP");
?>