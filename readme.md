# Instruksi

Yohoo!!! Halo gengs. Ini dia bahan latihan kemarin dan beberapa tambahan dokumentasi. Sebelumnya dari latihan kemarin ada beberapa materi yang dibahas yakni : 
  - Basic Git 
  - Cara Install Laravel
  - Route
  - Cara buat Model, Controller
  - Direktori Laravel
  - Env

# Basic Git

  Untuk materi yang kemarin di jelasin ada git init, git pull, git add, git     commit. Ulasan sederhana:
  Berikut langkah langkah mengupload berkas ke repository github.
  - Pastikan kalian punya koneksi internet.
  - Pada folder yang akan di upload. Pertama jalankan perintah melalui command  line :  `git init`
  - Kemudian tambahkan file file yang diperlukan dengan perintah `git add <nama_file>`. (Kalau mau menambahkan semua file bisa dengan cara `git add .`)
  - Nah, kalian udah init, trus udah nambahin filenya. Sekarang simpan check point kalian dengan "commit". Commit dapat menggunakan perintah `git commit -m "Pesan Checkpoint"`
  - Next.. tambahin alamat repository yang akan di upload. Tambahkan dengan perintah `git remote add origin <url gitnya>`
  - Last.. Push deh pake `git push origin master` (Untuk melakukan push ke branch master)
   
  Mungkin bagi yang pertama megang git bakal berfikir.. 
```
" WTF ?! Apaan nih branch?? ribet amat dah"
```
Itu wajar aja sih, kita juga awal awal belajar git bingung. Jadi kami ga bakal jelasin mendetail karna sambil jalan lebih kerasa ngertinya.

# Install Laravel
Next kita bahas mengenai cara install laravel. Jadi cara install laravel adalah : 
   - Buka Dokumentasi laravel.com. kami rasa udah lengkap banget disana kalau masalah install saja. Pastikan saja composer dan webserver kalian ada, dan php kalian versinya sesuai.

# Route
Untuk materi routenya sudah ada pada contoh di repository ini. Cara makenya gmana? Ikuti langkah berikut
  - Pertama, buka direktori tempat project anda, lalu buka terminal.
  - Ketik perintah 
  `git clone https://github.com/dscbali/laravel-blog.git`
  - Jika sudah selesai clone, akses folder laravel-blog lalu ketik perintah melalui terminal
  `composer install`
- Kalo dah kelar, jalankan perintah `cp .env.example .env` di direktori app laravelnya.
- Trus `php artisan key:generate`.
- Jalankan app laravel dengan `php artisan serve`.
- Cek files routes/web.php untuk materi Route dan app/Http/Controller untuk materi controller. Disana sudah ada penjelasan.