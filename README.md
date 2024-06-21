# Lancelot Project Assignment

<div style="text-align: justify"> Proyek ini merupakan bagian dari mata kuliah _Software Engineering_ (COMP6100001). Tujuan dari proyek ini adalah untuk mengembangkan software dengan mengikuti aturan SDLC yang tepat berdasarkan ide bisnis kreatif. Tema yang diangkat bisa bervariasi, termasuk: Makanan, Energi, Kesehatan, Transportasi, Maritim, Sosial Humaniora, Pendidikan, Seni dan Budaya, Multidisiplin, dan Sektor Lintas, sesuai dengan Tujuan Pembangunan Berkelanjutan (SDG). Lancelot ini termasuk ke dalam sektor Sosial Humaniora di mana LanceLot adalah sebuah aplikasi  berbasis website yang dirancang untuk menjadi jembatan antara pencari pekerjaan freelance dan pelanggan di Indonesia. Aplikasi ini diharapkan dapat menjadi solusi untuk menyediakan banyak peluang pekerjaan freelance bagi masyarakat Indonesia. Dengan LanceLot, kami menyediakan platform yang mudah digunakan, memungkinkan para freelancer menemukan peluang kerja sesuai dengan kriteria yang diinginkan, dan memudahkan pelanggan menemukan pekerja yang sesuai dengan kebutuhan mereka.</div>


## Output Proyek:
- Aplikasi: Tautan proyek di platform Sistem Kontrol Versi.
- Laporan Proyek: Menggunakan template PKM.
- Presentasi Proyek: Dalam bentuk slide atau video.

## Langkah - Langkah Penggunaan :
1. Buka XAMPP, lalu start Apache dan MySQL.
2. Buka Explorer dan buka folder htdocs.
3. Jalankan ```git clone https://github.com/lancelot-se/LancelotBE.git``` di terminal folder htdocs.
4. Buka admin (phpMyAdmin) di XAMPP, lalu import file sql ```lancelotnew.sql``` ke dalam phpMyAdmin.
5. Lalu di dalam folder yang sudah diclone buat file baru ```.env``` dan copy isi dari file ```.env.esample``` ke  dalam file ```.env```
6. Di dalam file ```.env``` ubah ```DB_DATABASE=___``` menjadi  ```DB_DATABASE=lancelotnew```.
7. Lalu jalankan command ```php artisan serve``` di terminal.


## Software yang digunakan :
- XAMPP 8.1.10
- Composer 2.4.3
- Visual Studio Code 1.90.2

## Framework yang digunakan :
- Laravel 10.48.11


## Programming Language yang digunakan :
- php 8.1.10
- CSS
- JavaScript
- Blade

