<?php
declare(strict_types=1);

require_once 'data.php';
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($namaSitus) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?= htmlspecialchars($namaSitus) ?></h1>
    </header>

    <main>
        <section class="info-koleksi">
            <p>Total koleksi buku: <strong><?= hitungTotalBuku($daftarItem) ?></strong></p>
        </section>

        <section class="daftar-buku">
            <h2>Daftar Buku</h2>
            <?php foreach ($daftarItem as $buku): ?>
                <article class="buku">
                    <h3><?= htmlspecialchars($buku['judul']) ?></h3>
                    <p>Penulis: <?= htmlspecialchars($buku['penulis']) ?></p>
                    <p>Tahun: <?= $buku['tahun'] ?></p>
                    <p>Status: <?= tampilkanStatus($buku['status_ketersediaan']) ?></p>
                </article>
            <?php endforeach; ?>
        </section>
        
        <div class="nav-wrapper">
            <a href="katalog.php" class="btn-navigasi">Lihat Katalog Buku &rarr;</a>
        </div>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($namaSitus) ?></p>
    </footer>
</body>
</html>
