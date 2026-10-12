# SPK Asrama Kalteng

Sistem pendukung keputusan untuk seleksi asrama menggunakan metode Simple Additive Weighting (SAW).

**Status:** Pengembangan lokal; demo publik belum tersedia.

## Fitur

- Pengelolaan alternatif dan bobot kriteria
- Matriks penilaian dan normalisasi
- Perhitungan preferensi serta hasil keputusan

## Teknologi

PHP, MySQL, HTML, CSS, JavaScript.

## Menjalankan secara lokal

Gunakan server Apache/PHP, misalnya XAMPP. Tempatkan salinan proyek pada document root dan buka `login.php` melalui localhost. Aturan `.htaccess`, jika tersedia, membutuhkan Apache dengan konfigurasi yang sesuai.

## Database

SQL siap impor tersedia di [`database/db_saw.sql`](database/db_saw.sql). File ini berasal dari dump proyek yang telah dibersihkan: struktur tabel, indeks, dan relasi dipertahankan; akun, hash password, data pribadi, serta data operasional asli tidak disertakan. Tujuh kriteria SAW beserta bobotnya tetap tersedia.

1. Buat database kosong bernama `db_saw` melalui phpMyAdmin.
2. Pilih database tersebut, buka tab **Import**, lalu pilih `database/db_saw.sql`. SQL ditujukan untuk database kosong dan tidak menghapus tabel yang sudah ada.
3. Salin template konfigurasi sesuai tabel di bawah, lalu isi host, nama database `db_saw`, username, dan password MySQL lokal Anda pada `include/conn.php`.
4. Dari folder proyek, jalankan `php database/create-admin.php` untuk membuat akun lokal dengan password pilihan Anda. Tidak ada akun atau password bawaan di repository.

Alternatif impor melalui terminal MySQL, setelah database kosong dibuat:

```sql
USE db_saw;
SOURCE database/db_saw.sql;
```

Jalankan perintah `SOURCE` dari folder proyek. Pada XAMPP Windows, PHP CLI tersedia di `C:\xampp\php\php.exe`.


## Konfigurasi privat

Salin template berikut ke nama file lokalnya, lalu isi nilai untuk lingkungan Anda:

| Template | File lokal |
| --- | --- |
| `include/conn.example.php` | `include/conn.php` |

File konfigurasi lokal diabaikan oleh Git. Jangan memasukkan password, API key, atau data akun ke source code.

## Catatan repository

Dependensi terpasang, cache, file `.env`, data database operasional, dan unggahan pengguna tidak disertakan. Nama merek dan aset pihak ketiga tetap mengikuti hak pemiliknya. Tidak ada lisensi penggunaan ulang yang diberikan melalui repository ini.
