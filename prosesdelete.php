<?php 
include "koneksi.php";

    $stmt = $db->prepare("DELETE FROM pabweb WHERE semester = ?");
    $stmt->bind_param("i", $_GET['semester']);
    $stmt->execute();
    $stmt->close();
    header("location:index.php?#IP");  
?>
