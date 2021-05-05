<?php 
session_start();

$user = $_POST['username'];
$pass = $_POST['pass'];

$_SESSION['username'] = $user;
$_SESSION['password'] = $pass;

header("location:login.php")
?>