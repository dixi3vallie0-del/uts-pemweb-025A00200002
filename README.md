# 📚 Perpustakaan Dinda

Aplikasi web katalog perpustakaan sederhana yang dibangun menggunakan **PHP murni tanpa database**. Data koleksi buku disimpan dalam array multidimensi, lalu ditampilkan pada halaman beranda dan halaman Katalog dengan tema UI **pink pastel** yang aesthetic dan responsif di berbagai ukuran layar

Proyek ini dibuat untuk memenuhi tugas Ujian Tengah Semester (UTS) mata kuliah Pemrograman Web

---

## 👩‍💻 Identitas Pengembang

| Keterangan    | Detail                           |
|---------------|----------------------------------|
| Nama          | Dinda Pramudita Padmasyahrani    |
| NIM           | 025A00200002                     |
| Program Studi | S1-Informatika (Sore)            |

---

## ✅ Pencapaian Syarat Bonus Level 4

- [x] **Data ≥ 8 item dengan 4 atribut:** Menggunakan array multidimensi `$daftarItem` yang berisi 8 data buku, masing-masing memiliki atribut `judul`, `penulis`, `tahun`, dan `status_ketersediaan` (bertipe boolean)
- [x] **Minimal 2 fungsi buatan sendiri:** Mengimplementasikan fungsi `hitungTotalBuku(array $data): int` dan `tampilkanStatus(bool $status): string` pada `functions.php` dengan deklarasi tipe data yang ketat (`declare(strict_types=1);`)
- [x] **Minimal 3 fungsi array bawaan PHP:** Menerapkan `array_filter` (menyaring buku yang tersedia), `array_column` (mengambil kolom tahun terbit), dan `usort` (mengurutkan katalog berdasarkan tahun), serta didukung `min` dan `count`
- [x] **Percabangan `match(true)` dengan lebih dari 2 kondisi:** Mengategorikan umur buku menjadi *Buku Klasik* (< 2000), *Buku Milenium* (< 2010), dan *Buku Modern* (≥ 2010)
- [x] **Ringkasan kalkulasi hasil:** Menampilkan Total Buku Tersedia dan Tahun Buku Paling Tua pada halaman katalog.
- [x] **Clean code:** Struktur file terpisah dan rapi (data, fungsi, tampilan, dan gaya) serta bebas dari komentar `TODO` bawaan
- [x] **Responsif dan interaktif:** Tampilan tetap rapi di layar ponsel (menggunakan meta viewport, CSS Grid, dan media query), serta tombol navigasi memiliki efek hover yang lembut

---

## 📁 Struktur Proyek

```
uts-pemweb-025A00200002/
├── data.php        # Data koleksi buku (array multidimensi) dan nama situs
├── functions.php   # Fungsi buatan sendiri
├── index.php       # Halaman Beranda
├── katalog.php     # Halaman Katalog (filter, sorting, kategori, ringkasan)
├── style.css       # Styling tema pink pastel
└── README.md       # Dokumentasi proyek
```

---

## 🚀 Cara Menjalankan Secara Lokal

1. Letakkan folder proyek `uts-pemweb-025A00200002` ke dalam direktori `www` milik **Laragon** (contoh: `C:\laragon\www\`).
2. Buka **Laragon**, lalu klik **Start All** untuk menyalakan **Apache**.
3. Buka browser, lalu akses URL berikut:

   ```
   http://localhost:8000/uts-pemweb-025A00200002/uts-pemweb-025A00200002/index.php
   ```

> **Catatan:** Sesuaikan URL dengan port dan struktur folder pada Laragon kamu jika berbeda.

---

## 🛠️ Teknologi yang Digunakan

- PHP 8 (murni, tanpa database)
- HTML5 semantik
- CSS3 (Grid, Flexbox, Media Query)
- Google Fonts (Quicksand)

---

© 2026 Dinda Pramudita Padmasyahrani