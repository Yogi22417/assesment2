<?php 

$server = 'yogi-pabweb-4303.mysql.database.azure.com';
$user = 'yogipabweb@yogi-pabweb-4303';
$password = '@Yogiman123';
$nama_database = 'assesment2';

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die('Gagal terhubung dengan database: ' . mysqli_connect_error());
}
?>