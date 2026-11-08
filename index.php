<?php
declare(strict_types=1);

require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

$jumlahKue = count($daftarKue);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($namaToko) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="wadah kepala">
    <h1><?= e($namaToko) ?></h1>
    <p>Kue rumahan, dibuat setiap pagi.</p>
</header>

<main class="wadah">
    <section>
        <h2>Daftar Kue</h2>
        <p>Tersedia <?= $jumlahKue ?> jenis kue.</p>

        <div class="grid">
            <?php foreach ($daftarKue as $kue): ?>
                <?php
                if ($kue["stok"] === 0) {
                    $label = "Habis";
                    $kelasLabel = "label label--habis";
                } else {
                    $label = "Tersedia";
                    $kelasLabel = "label";
                }
                ?>
                <article class="kartu">
                    <h3><?= e($kue["nama"]) ?></h3>
                    <p class="harga"><?= formatRupiah($kue["harga"]) ?></p>
                    <p class="<?= $kelasLabel ?>"><?= $label ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<footer class="wadah kaki">
    <p>&copy; <?= date("Y") ?> <?= e($namaToko) ?></p>
</footer>

</body>
</html>
