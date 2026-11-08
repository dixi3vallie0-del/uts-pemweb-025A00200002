<?php
declare(strict_types=1);

// functions.php - fungsi-fungsi (tanpa HTML)

// Mengamankan teks sebelum dicetak ke HTML
function e(string $teks): string
{
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}

function formatRupiah(int $angka): string
{
    return "Rp" . number_format($angka, 0, ',', '.');
}
