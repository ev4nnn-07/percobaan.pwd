<?php
// =============================================
// INDEX.PHP / LOGIN - Modul 6 : Session
// =============================================
session_start();

// Jika sudah login, langsung ke dashboard
if (isset($_SESSION['username'])) {
    header("location: dashboard.php");
    exit();
}

include 'koneksi.php';

$pesan = "";

// Proses login - Modul 3 : Menerima masukan dari user
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Modul 7 : Query SELECT ke database
    $query = mysqli_query($konek, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);

    // Modul 4 : Percabangan IF-ELSE
    if ($cek > 0) {
        $data = mysqli_fetch_array($query);
        // Session - Modul 6
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama']     = $data['nama'];
        $_SESSION['role']     = $data['role'];
        $_SESSION['id_user']  = $data['id'];
        header("location: dashboard.php");
        exit();
    } else {
        $pesan = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Perpustakaan Digital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-wrap">
    <div class="login-card fade-in">
        <div class="login-logo">
            <span class="ikon">📚</span>
            <h1>Perpustakaan Digital</h1>
            <p>Prodi Teknik Informatika UPN "Veteran" Yogyakarta</p>
        </div>

        <?php if ($pesan != "") { ?>
            <div class="alert alert-danger">⚠️ <?php echo $pesan; ?></div>
        <?php } ?>

        <div class="demo-info">
            <strong>Akun Demo:</strong><br>
            Admin: <strong>admin</strong> / admin123<br>
            User: <strong>budi</strong> / budi123
        </div>

        <form method="POST" action="index.php">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary" style="width:100%; justify-content:center; padding:12px;">
                🔐 Masuk
            </button>
        </form>

        <p style="text-align:center; margin-top:20px; font-size:0.8rem; color:var(--teks-abu);">
            Belum punya akun? Hubungi administrator perpustakaan.
        </p>
    </div>
</div>
</body>
</html>