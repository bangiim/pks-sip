<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Project

Ini adalah project dari Bootcamp **PKS Digital School**, project ini dikembangkan menggunakan framework Laravel versi 6.x.
<br>
Project ini dikerjakan secara team dan tiap team berisikan 3 anggota. Berikut nama-nama anggota team kami :
- Muhammad Ibrahim - [@bang_iim](https://t.me/bang_iim).
- Lulu Lutfi Latifah - [@lululutfii](https://t.me/lululutfii).
- Kiki Meidinasari - [@kikimeidinasari](https://t.me/kikimeidinasari).


## Tema Project

Dalam project ini, kami membuat **Sistem Informasi Perpustakaan (SIP)**. Sistem ini memiliki 4 fungsi utama, yaitu :
1. Mengelola data buku
2. Mengelola data anggota
3. Mengelola data sirkulasi
4. OPAC

## ERD System
<a href="https://ibb.co/0snsK1R"><img src="https://i.ibb.co/bb6bFYM/photo6086933055139851556.jpg" alt="ERD-SIP" border="0"></a>

## Link Video

Link video aplikasi : https://youtu.be/WWfhUfjMo-E

## Link Demo

Link demo aplikasi : http://fp-pks-sip.herokuapp.com/

## Installation Project
1. Buka **cmd** lalu ketikkan
2. Cloning repository : `git clone https://gitlab.com/bangiim/pks-sip.git`
3. Masuk ke directory project : `cd pks-sip`
4. `composer install`
5. Buat file `.env`, isinya diambil dari `.env.example`
6. Buat **database**, lalu masukkan nama database ke `DB_DATABASE` di file `.env`
7. `php artisan key:generate`
8. `php artisan migrate`
9. `php artisan serve`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
