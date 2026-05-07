<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku - PustakaNusa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans text-gray-900">

    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="bg-blue-900 p-2 rounded-lg text-white">
                    <i class="fas fa-book-open"></i>
                </div>
                <span class="text-xl font-bold text-blue-900">PustakaNusa</span>
            </div>
            <div class="hidden md:flex gap-6 font-medium text-gray-600">
                <a href="beranda.php" class="hover:text-blue-900">Beranda</a>
                <a href="katalog.php" class="text-blue-900 border-b-2 border-blue-900">Katalog</a>
                <a href="beranda.php" class="hover:text-blue-900">Tentang</a>
                <a href="beranda.php" class="hover:text-blue-900">Kontak</a>
            </div>
            <button class="bg-blue-900 text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-blue-800 transition">
                <i class="fas fa-user-circle mr-2"></i> Masuk
            </button>
        </div>
    </nav>

    <header class="bg-blue-900 py-12 text-white text-center">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">Eksplorasi Koleksi Kami</h1>
        <p class="text-blue-100 max-w-2xl mx-auto px-4">Temukan lebih dari 50.000 judul buku mulai dari literatur klasik hingga teknologi terbaru.</p>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-8">
            
            <aside class="w-full md:w-64 space-y-6">
                <div>
                    <h3 class="font-bold text-lg mb-3">Kategori</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><label class="flex items-center gap-2 hover:text-blue-900 cursor-pointer"><input type="checkbox" class="rounded"> Semua Kategori</label></li>
                        <li><label class="flex items-center gap-2 hover:text-blue-900 cursor-pointer"><input type="checkbox" class="rounded"> Novel</label></li>
                        <li><label class="flex items-center gap-2 hover:text-blue-900 cursor-pointer"><input type="checkbox" class="rounded"> Teknologi</label></li>
                        <li><label class="flex items-center gap-2 hover:text-blue-900 cursor-pointer"><input type="checkbox" class="rounded"> Sastra</label></li>
                        <li><label class="flex items-center gap-2 hover:text-blue-900 cursor-pointer"><input type="checkbox" class="rounded"> Sejarah</label></li>
                    </ul>
                </div>
                <hr>
                <div>
                    <h3 class="font-bold text-lg mb-3">Ketersediaan</h3>
                    <label class="flex items-center gap-2 text-gray-600 cursor-pointer">
                        <input type="radio" name="status" class="text-blue-900"> Tersedia Sekarang
                    </label>
                </div>
            </aside>

            <section class="flex-1">
                <div class="flex justify-between items-center mb-6">
                    <p class="text-gray-500">Menampilkan <span class="font-bold text-gray-800">120</span> hasil</p>
                    <select class="border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-900">
                        <option>Terbaru</option>
                        <option>Terpopuler</option>
                        <option>A-Z</option>
                    </select>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <?php 
                    // Contoh data dummy untuk simulasi loop
                    $buku = [
                        ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tag' => 'NOVEL', 'skor' => '4.9'],
                        ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tag' => 'SASTRA', 'skor' => '4.8'],
                        ['judul' => 'Clean Code', 'penulis' => 'Robert C. Martin', 'tag' => 'TEKNOLOGI', 'skor' => '4.7'],
                        ['judul' => 'Sapiens', 'penulis' => 'Yuval Noah Harari', 'tag' => 'SEJARAH', 'skor' => '4.8'],
                        // Tambahkan lebih banyak data di sini...
                    ];

                    foreach($buku as $item): 
                    ?>
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition group">
                        <div class="aspect-[3/4] bg-gray-200 rounded-xl mb-4 overflow-hidden relative">
                             <div class="absolute inset-0 flex items-center justify-center text-gray-400 italic">Cover</div>
                             <span class="absolute top-2 left-2 bg-blue-900 text-white text-[10px] font-bold px-2 py-1 rounded">
                                 <?= $item['tag'] ?>
                             </span>
                        </div>
                        <h4 class="font-bold text-gray-900 line-clamp-1"><?= $item['judul'] ?></h4>
                        <p class="text-sm text-gray-500 mb-2"><?= $item['penulis'] ?></p>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="text-yellow-500 text-sm font-bold"><i class="fas fa-star"></i> <?= $item['skor'] ?></span>
                            <button class="bg-gray-100 text-blue-900 p-2 rounded-lg group-hover:bg-blue-900 group-hover:text-white transition">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </main>

    <footer class="bg-white border-t mt-20 py-10 text-center text-gray-500 text-sm">
        <p>&copy; 2026 PUSTAKANUSA. Built with PHP & Tailwind.</p>
    </footer>

</body>
</html>