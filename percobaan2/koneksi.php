<?php
// =============================================
// KONEKSI DATABASE - Modul 5 : Koneksi PHP dengan MySQL
// =============================================
 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan";
 
$konek = new mysqli($hostname, $username, $password, $database);
 
if ($konek->connect_error) {
    die("Maaf koneksi gagal: " . $konek->connect_error);
}
 
// Set charset agar mendukung karakter Indonesia
$konek->set_charset("utf8");
?>