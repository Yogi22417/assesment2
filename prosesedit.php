<?php

include 'koneksi.php';

	$stmt = $db->prepare("UPDATE pabweb SET ip = ? WHERE semester = ?");
    $stmt->bind_param("si", $_POST['ip'], $_POST['semester']);
    $stmt->execute();
    $stmt->close();
    header("location:index.php?#IP");
?>