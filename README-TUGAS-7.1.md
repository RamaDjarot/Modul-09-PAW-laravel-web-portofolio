# Modul 09 - Tugas 7.1 poin 2 (Web Portofolio di Laravel 13)

Setelah ekstrak zip, jalankan dari folder project:

    composer install
    cp .env.example .env        # Windows: copy .env.example .env
    php artisan key:generate
    npm install
    npm run dev                 # terminal 1
    php artisan serve           # terminal 2

Alamat halaman:
- http://localhost:8000/portofolio          (Beranda)
- http://localhost:8000/portofolio/tentang  (Tentang)
- http://localhost:8000/portofolio/proyek   (Portofolio)
- http://localhost:8000/portofolio/kontak   (Kontak)

File tugas: routes/web.php, resources/views/layouts/portfolio.blade.php,
resources/views/portfolio/*.blade.php, resources/sass/app.scss, resources/images/avatar.jpg
