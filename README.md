# 📦 Read SQLite File with PHP

Proyek ini bertujuan untuk membaca isi file **SQLite (.sqlite)** menggunakan PHP dan menampilkannya dalam format tabel HTML yang rapi.

## 📁 Isi Folder

- `database.sqlite` — File database SQLite yang berisi tabel `users`.
- `read-file.php` — File PHP untuk membaca dan menampilkan isi database.

---

## 🚀 Cara Menjalankan Proyek Ini

### 1. Persiapan

Pastikan kamu sudah menginstal salah satu dari software berikut:

- [Laragon](https://laragon.org/)
- [XAMPP](https://www.apachefriends.org/)
- [MAMP](https://www.mamp.info/)

### 2. Letakkan File

Salin folder proyek ini ke dalam direktori `www` atau `htdocs`, sesuai dengan web server yang digunakan.

Contoh untuk Laragon:

```
C:\Users\user\laragon\www\read-sqlite-file\
```

### 3. Jalankan Server

Buka aplikasi web server, lalu klik **Start All**.

### 4. Akses Melalui Browser

Buka browser dan akses:

```
http://localhost/read-sqlite-file/read-file.php
```

---

## 📄 Tentang `read-file.php`

- Membuka file `database.sqlite` menggunakan `SQLite3`.
- Menjalankan query `SELECT * FROM users`.
- Menampilkan semua data dalam tabel HTML dengan penanganan untuk data `null`.

Jika nama tabel di database kamu **bukan** `users`, kamu bisa menjalankan kode ini dulu untuk melihat nama tabel:

```php
$result = $db->query("SELECT name FROM sqlite_master WHERE type='table'");
```

---

## ❗ Catatan

- Script ini menggunakan PHP bawaan (`SQLite3`), jadi tidak butuh library tambahan.
- Pastikan file `database.sqlite` tidak kosong atau rusak.
- Gunakan PHP versi 8.1 ke atas agar sesuai dengan standar terbaru (dengan penanganan `null` yang aman).

---

## 💡 Pengembangan Selanjutnya

Kamu bisa mengembangkan proyek ini dengan:

- Fitur pencarian (filter kolom).
- Export ke CSV/Excel.
- Styling dengan Bootstrap atau TailwindCSS.
- Menambahkan autentikasi untuk proteksi.

---

## 📬 Lisensi

Proyek ini bebas digunakan untuk pembelajaran dan pengembangan lebih lanjut. Tidak ada lisensi khusus.
