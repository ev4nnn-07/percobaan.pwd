<?php
// Data Mockup untuk simulasi database
$categories = [
    ['name' => 'Sains & Alam', 'count' => '3.200', 'icon' => 'fa-atom'],
    ['name' => 'Teknologi', 'count' => '2.900', 'icon' => 'fa-microchip'],
    ['name' => 'Sejarah', 'count' => '1.800', 'icon' => 'fa-landmark'],
    ['name' => 'Sastra & Novel', 'count' => '5.400', 'icon' => 'fa-book-open']
];

$books = [
    [
        'title' => 'Laskar Pelangi',
        'author' => 'Andrea Hirata',
        'year' => '2005',
        'rating' => '4.9',
        'genre' => 'Novel',
        'status' => 'Tersedia',
        'img' => 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&w=400&q=80'
    ],
    [
        'title' => 'Bumi Manusia',
        'author' => 'Pramoedya Ananta Toer',
        'year' => '1980',
        'rating' => '4.8',
        'genre' => 'Sastra',
        'status' => 'Dipinjam',
        'img' => 'https://perjamuanbuku.com/wp-content/uploads/2025/02/Bumi-MANUSIA-FC.webp'
    ],
    [
        'title' => 'Clean Code',
        'author' => 'Robert C. Martin',
        'year' => '2008',
        'rating' => '4.7',
        'genre' => 'Teknologi',
        'status' => 'Tersedia',
        'img' => 'https://images.unsplash.com/photo-1516339901601-2e1b62dc0c45?auto=format&fit=crop&w=400&q=80'
    ],
    [
        'title' => 'Sapiens',
        'author' => 'Yuval Noah Harari',
        'year' => '2011',
        'rating' => '4.8',
        'genre' => 'Sejarah',
        'status' => 'Tersedia',
        'img' => 'https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&w=400&q=80'
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PustakaNusa - Perpustakaan PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .hero-gradient {
            background: linear-gradient(rgba(15, 23, 42, 0.9), rgba(15, 23, 42, 0.8)), 
                        url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=1920&q=80');
            background-size: cover; background-position: center;
        }
    </style>
</head>
<body class="bg-slate-50">

    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="bg-blue-900 p-2 rounded-xl"><i class="fas fa-book-open text-white"></i></div>
                <span class="font-extrabold text-2xl text-blue-900 tracking-tight">PustakaNusa</span>
            </div>
            <div class="hidden md:flex gap-8 font-bold text-slate-600 uppercase text-xs tracking-widest">
                <a href="#" class="text-blue-900">Beranda</a>
                <a href="katalog.php" class="hover:text-blue-900 transition">Katalog</a>
                <a href="#" class="hover:text-blue-900 transition">Tentang</a>
                <a href="#" class="hover:text-blue-900 transition">Kontak</a>
            </div>
            <div class="flex items-center gap-4">
                <button class="text-slate-500 font-bold text-sm"><i class="fas fa-search mr-1"></i> Cari</button>
                <button class="bg-blue-900 text-white px-6 py-2.5 rounded-xl font-bold flex items-center gap-2 shadow-lg shadow-blue-900/20">
                    <i class="far fa-user-circle"></i> Masuk
                </button>
            </div>
        </div>
    </nav>

    <header class="hero-gradient py-28 text-center text-white px-6">
        <div class="max-w-4xl mx-auto">
            <span class="bg-blue-500/20 text-blue-300 border border-blue-400/30 px-4 py-1.5 rounded-full text-xs font-bold uppercase italic tracking-widest mb-6 inline-block">✨ Perpustakaan Digital & Fisik</span>
            <h1 class="text-5xl md:text-7xl font-black mb-8 leading-tight">Temukan Dunia Pengetahuan di Satu Tempat</h1>
            <div class="bg-white p-2 rounded-2xl shadow-2xl flex flex-col md:row gap-2 max-w-2xl mx-auto">
                <input type="text" placeholder="Cari judul, penulis, atau ISBN..." class="flex-1 px-6 py-4 outline-none text-slate-800 rounded-xl">
                <button class="bg-blue-900 px-10 py-4 rounded-xl font-black hover:bg-blue-800 transition">CARI</button>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-6 -mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 mb-24">
        <?php 
        $stats = [
            ['val' => '50.000+', 'label' => 'Koleksi Buku', 'icon' => 'fa-layer-group'],
            ['val' => '12.000+', 'label' => 'Anggota Aktif', 'icon' => 'fa-users'],
            ['val' => '8.500+', 'label' => 'Dipinjam / Bulan', 'icon' => 'fa-chart-line']
        ];
        foreach($stats as $s): ?>
        <div class="bg-blue-900 p-8 rounded-[2rem] text-white shadow-xl flex items-center gap-6">
            <div class="bg-white/10 w-16 h-16 rounded-2xl flex items-center justify-center text-2xl"><i class="fas <?= $s['icon'] ?>"></i></div>
            <div>
                <div class="text-3xl font-black"><?= $s['val'] ?></div>
                <div class="text-blue-300 text-xs font-bold uppercase tracking-widest"><?= $s['label'] ?></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <section class="max-w-7xl mx-auto px-6 mb-32">
        <div class="flex justify-between items-end mb-12">
            <div>
                <span class="text-blue-700 font-black uppercase italic tracking-widest text-sm">Terpopuler</span>
                <h2 class="text-4xl font-extrabold mt-2">Buku Pilihan</h2>
            </div>
            <a href="#" class="text-blue-900 font-bold border-b-2 border-blue-900">Lihat Semua</a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            <?php foreach($books as $book): ?>
            <div class="bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-300 group">
                <div class="h-72 overflow-hidden relative">
                    <img src="<?= $book['img'] ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-tighter text-blue-900">
                        <?= $book['genre'] ?>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-extrabold text-xl text-slate-900 mb-1 leading-tight"><?= $book['title'] ?></h3>
                    <p class="text-slate-500 text-sm mb-4"><?= $book['author'] ?></p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center text-yellow-500 font-bold text-sm">
                            <i class="fas fa-star mr-1"></i> <?= $book['rating'] ?>
                        </div>
                        <button class="<?= $book['status'] == 'Tersedia' ? 'bg-blue-900' : 'bg-slate-200 text-slate-500' ?> text-white text-[10px] font-bold px-4 py-2 rounded-xl uppercase">
                            <?= $book['status'] == 'Tersedia' ? 'Pinjam' : 'Reservasi' ?>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="bg-slate-900 text-white pt-24 pb-12">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-16 border-b border-white/5 pb-20">
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-blue-600 p-2 rounded-xl"><i class="fas fa-book-open"></i></div>
                    <span class="font-black text-2xl tracking-tighter">PustakaNusa</span>
                </div>
                <p class="text-slate-400 leading-relaxed mb-6">Perpustakaan modern dengan akses pengetahuan seluas-luasnya.</p>
                <div class="flex items-center gap-2 text-green-400 text-sm font-bold uppercase italic">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-ping"></span> Buka: 07.00 - 21.00
                </div>
            </div>
            <div>
                <h4 class="font-black text-xs uppercase tracking-[0.2em] mb-8 text-slate-500">Tautan</h4>
                <ul class="space-y-4 text-slate-400 font-bold text-sm">
                    <li><a href="#" class="hover:text-white transition">Katalog Buku</a></li>
                    <li><a href="#" class="hover:text-white transition">Keanggotaan</a></li>
                    <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-black text-xs uppercase tracking-[0.2em] mb-8 text-slate-500">Kontak</h4>
                <ul class="space-y-4 text-slate-400 text-sm">
                    <li class="flex gap-3"><i class="fas fa-map-marker-alt text-blue-500"></i> Yogyakarta, Indonesia</li>
                    <li class="flex gap-3"><i class="fas fa-envelope text-blue-500"></i> hi@pustakanusa.id</li>
                </ul>
            </div>
            <div class="bg-white/5 p-8 rounded-3xl border border-white/10">
                <h4 class="font-black text-xs uppercase tracking-[0.2em] mb-4">Newsletter</h4>
                <p class="text-slate-400 text-xs mb-4">Dapatkan info buku terbaru.</p>
                <input type="text" class="w-full bg-slate-800 border-none rounded-xl px-4 py-3 text-sm mb-2" placeholder="Email Anda">
                <button class="w-full bg-blue-600 rounded-xl py-3 font-bold text-xs uppercase">Langganan</button>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 mt-12 flex flex-col md:row justify-between items-center text-slate-500 text-[10px] font-bold tracking-widest uppercase">
            <p>© 2025 PustakaNusa. Built with PHP & Tailwind.</p>
            <div class="flex gap-8 mt-4 md:mt-0">
                <a href="#">Privacy</a><a href="#">Terms</a>
            </div>
        </div>
    </footer>

</body>
</html>