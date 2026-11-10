<?php
declare(strict_types=1);

require_once 'data.php';
require_once 'functions.php';

// 1. array_filter: ambil hanya buku yang tersedia
$bukuTersedia = array_filter(
    $daftarItem,
    fn(array $buku): bool => $buku['status_ketersediaan'] === true
);
$totalTersedia = count($bukuTersedia);

// 2. array_column: ambil semua tahun terbit, lalu cari yang paling tua dengan min()
$semuaTahun = array_column($daftarItem, 'tahun');
$tahunTertua = min($semuaTahun);

// 3. usort: urutkan katalog berdasarkan tahun terbit (dari yang paling lama)
$katalog = $daftarItem;
usort(
    $katalog,
    fn(array $a, array $b): int => $a['tahun'] <=> $b['tahun']
);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog - <?= htmlspecialchars($namaSitus) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?= htmlspecialchars($namaSitus) ?></h1>
        <p>Katalog Buku Berdasarkan Tahun Terbit</p>
    </header>

    <main>
        <section class="info-koleksi">
            <p>Total buku tersedia: <strong><?= $totalTersedia ?></strong> dari <strong><?= hitungTotalBuku($daftarItem) ?></strong> buku</p>
            <p>Tahun buku paling tua: <strong><?= $tahunTertua ?></strong></p>
        </section>

        <section class="daftar-buku">
            <h2>Katalog Buku</h2>
            <?php foreach ($katalog as $buku): ?>
                <?php
                $kategori = match (true) {
                    $buku['tahun'] < 2000  => 'Buku Klasik',
                    $buku['tahun'] < 2010  => 'Buku Milenium',
                    default                => 'Buku Modern',
                };
                ?>
                <article class="buku">
                    <h3><?= htmlspecialchars($buku['judul']) ?></h3>
                    <p>Penulis: <?= htmlspecialchars($buku['penulis']) ?></p>
                    <p>Tahun: <?= $buku['tahun'] ?></p>
                    <p>Kategori: <span class="kategori"><?= $kategori ?></span></p>
                    <p>Status: <?= tampilkanStatus($buku['status_ketersediaan']) ?></p>
                </article>
            <?php endforeach; ?>
        </section>

        <div class="nav-wrapper">
            <a href="index.php" class="btn-navigasi">&larr; Kembali ke Beranda</a>
        </div>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($namaSitus) ?></p>
    </footer>
</body>
</html>