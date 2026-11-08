<?php
declare(strict_types=1);

function hitungTotalBuku(array $data): int
{
    return count($data);
}

function tampilkanStatus(bool $status): string
{
    if ($status) {
        return '<span class="badge badge-tersedia">Tersedia</span>';
    }

    return '<span class="badge badge-dipinjam">Sedang Dipinjam</span>';
}
