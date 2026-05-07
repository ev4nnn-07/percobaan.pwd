<?php
// =============================================
// LOGOUT.PHP - Modul 6 : Session Destroy
// =============================================
session_start();
session_destroy(); // Menghapus semua session

// Redirect ke halaman login
header("location: index.php?pesan=logout");
exit();
?>