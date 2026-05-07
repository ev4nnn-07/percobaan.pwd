<?php
// =============================================
// HAPUS_BUKU.PHP - Modul 5 : DELETE dari database
// =============================================
session_start();

if (empty($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header('Location: index.php');
    exit();
}

include 'koneksi.php';

$id_buku = $_GET['id'];

// Cek apakah buku sedang dipinjam
$cek_pinjam = mysqli_query($konek, "SELECT * FROM peminjaman WHERE id_buku='$id_buku' AND status='dipinjam'");

if (mysqli_num_rows($cek_pinjam) > 0) {
    // Tidak bisa hapus - sedang dipinjam
    header("location: kelola_buku.php?pesan=gagal_hapus");
} else {
    // DELETE buku - Modul 5 : DELETE
    mysqli_query($konek, "DELETE FROM buku WHERE id_buku='$id_buku'");
    header("location: kelola_buku.php?pesan=berhasil_hapus");
}
exit();
?>