<?php   
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "smk1";

$koneksi = mysqli_connect("localhost","root","","smk1");

if( !$koneksi ){
    die("Gagal terhubung dengan database: " .mysqli_connect_error());
}

?>