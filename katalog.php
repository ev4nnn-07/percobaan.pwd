<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Poppins',sans-serif;
    color:white;
}

/* NAVBAR */
.navbar{
    background:#243f6b;
}

.logo-img{
    width:35px;
    margin-right:10px;
}

/* HERO */
.hero{
    padding:120px 20px;
    text-align:center;
    min-height:100vh;

    /* INI YANG PENTING */
    background: linear-gradient(rgba(31,59,99,0.85), rgba(31,59,99,0.85)), 
                url('image/download.jpg');

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
}

.badge-custom{
    border:1px solid rgba(255,255,255,0.3);
    border-radius:20px;
    padding:6px 14px;
    font-size:12px;
}

.hero h1 span{
    color:#ffd27f;
}

.search-box{
    max-width:600px;
    margin:auto;
}

.search-box input{
    border-radius:10px 0 0 10px;
}

.search-box button{
    border-radius:0 10px 10px 0;
    background:#1f3b63;
    border:none;
}

.card-custom{
    background:rgba(255,255,255,0.08);
    border:none;
    border-radius:16px;
    backdrop-filter:blur(10px);
}
</style>
</head>
<body>
    <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">

    <!-- LOGO -->
    <a class="navbar-brand fw-semibold d-flex align-items-center" href="#">
        <img src="image/hero.png.png" class="logo-img">
        Pustakamini
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto me-3">
        <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="katalog.php">Katalog</a>
        <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
      </ul>
      <a href="#" class="btn btn-light">Masuk</a>
    </div>
  </div>
</nav>

</body>
</html>