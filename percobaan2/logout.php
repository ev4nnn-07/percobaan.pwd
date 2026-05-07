<?php
// =============================================
// LOGOUT.PHP - Modul 6 : Session Destroy
// =============================================
session_start();
session_destroy(); // Menghapus semua session
header('Location: index.php?pesan=logout');
exit();
?>