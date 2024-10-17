<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "smk1";

// Membuat koneksi
$koneksi = new mysqli($server, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
} else {
  
}

// Tutup koneksi (opsional)
// $koneksi->close();
?>