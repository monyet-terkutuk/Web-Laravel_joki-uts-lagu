<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Web Lagu Laravel

Ini adalah web yang sangat sederhana, dibuat saat menjoki tugas uts mahasiswa, semua fitur yang ada adalah fitur fitur paling dasar.Web ini menggunakan template dari bootstrap yaitu SB Admin 2.



## Features

Fitur yang ada di dalam nya :
- Login
- Crud Data Mahasiswa
- Crud Data Lagu
- Beberapa halaman text biasa


## Installation

Langkah pertama adalah membuat database di phpmyadmin. Lalu buat database `uts_lagu`. Setelah membuat database di phpmyadmin, buka project anda diterminal misal,buka di vscode folder `Web-Laravel_joki-uts-lagu` lalu buka terminal vs code jalankan perintah :

```bash
  php artisan migrate
```
Perintah tersebut akan membuat database yang di perlukan, lalu setelah itu aplikasi sudah siap, tinggal jalankan menggunakan :

```bash
  php artisan serve
```
Setelah menjalankan perintah tersebut akan muncul alamat :

```bash
  http://127.0.0.1:8000/
```
jalankan alamat di atas di dalam browser anda misal, chrome, firefox, dll. Lalu akan muncul halaman login, artinya aplikasi sudah siap, silahkan register terlebih dahulu lalu login, selamat mencoba.
## Error
Jika proses instalasi gagal saat menjalankan `php artisan migrate` inilah beberapa penyebab terjadinya error :

#### Versi PHP 

Error mungkin terjadi jika versi php tidak sesuai, pada project ini saya mengguakan php versi `8.0.28` jika php anda di bawah ini silahkan download xampp terbaru.

#### Masalah Pada Composer

Jika versi pada php sudah sesuai dan error masih terjadi mungkin itu adalah composer yang bermasalah, coba langkah langkah berikut :


```bash
  composer self-update
```

```bash
  composer install
```

```bash
  composer update
```
## Authors

- [@undeath-cyber](https://www.github.com/undeath-cyber)

- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
