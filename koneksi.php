<?php   
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "smk";

$koneksi = mysqli_connect("localhost","root","","smk");

if( !$koneksi ){
    die("Gagal terhubung dengan database: " .mysqli_connect_error());
}

?>