
<p align="center"><a href="https://laravel.com" target="_blank">



## Features

- Authentication menggunakan Laravel UI Bootstrap :
    *   Register
    *   Login
    *   Forget Password
- CAPTCHA Login.
- Example UI Dashboard.
- Password Validation.
- Authorization :
    *   Data Admin
        * Create
        * Edit
        * Block
        * All Trash :
            * Restore
]
 - Data Example (Data Customer) :
    * Create
    * Edit
    * Trash
    * Download (Excel)
    * All Trash :
        * Restore
        * Delete
 - Profile Account :
    * Change Photo Profile.
    * Update Data Profile.
 - Setting Account (Update Password).

    
## Requered :
- PHP ^8.0
- Composer version 2.3.7
- MySQL ^8.0

## Package PHP :
- "barryvdh/laravel-debugbar": "^3.7"
    > Note: Untuk DebugBar Info.
- "intervention/image": "^2.7",
    > Note: Untuk Manajemen Image (Upload).
- "maatwebsite/excel": "^3.1",
    > Note: Untuk Membuat Report dalam bentuk Excel.
- "mews/captcha": "3.2.7",
    > Note: Untuk captcha ketika login.
- "pragmarx/google2fa-laravel": "^2.0",
    > Note: Untuk Google 2FA.  
- "simplesoftwareio/simple-qrcode": "^4.2",
    > Note: Untuk menampilkan QRCode Google 2FA.  
- "spatie/laravel-permission": "^6.9",
    > Note: Untuk Manajemen Authorization User.
- "yajra/laravel-datatables": "^11.0",
    > Note: Untuk Manajemen Table Display.
- "yaza/laravel-repository-service": "^5.0.1"
    > Note: Untuk Manajemen Repository design pattern.

## Setup :

- Clone Project dari Github :
```shell
git clone https://github.com/hanangpradipta/Ujian-IPSI.git
```
- Masuk ke folder project:
```shell
cd Ujian-IPSI
```
- Buka di vscode:
```shell
code .
```

- Didalam project tersebut sudah ada file bernama .env.example -> Hapus .example nya agar menjadi file bernama .env

- Jalankan perintah :
```shell
composer install
```
- Jalankan perintah :
```shell
php artisan key:generate
```
- Buat Database.
- Konfigurasi Database.

- Lalu jalankan perintah :
```shell
php artisan migrate
```

- Lalu jalankan perintah :
```shell
php artisan db:seed --class=PermissionSeeder
```
- Untuk membuat User SuperAdmin (username, email, password -> ubah bebas)
- Contoh perintah :
```shell
php artisan super:admin --username=pradipta --email=pradipta@gmail.com --password=Password@123
```
> Note: Password terdiri dari kombinasi huruf Besar, Kecil, Karakter Khusus dan Angka.

- Jalankan Aplikasi
```shell
php artisan serve
```
Akses melalui http://127.0.0.1:8000/


## Note :
Jika terjadi error pada linux package gmp maka install dengan cara : 
```shell
sudo apt-get install php8.2-gmp
```
Di sesuaikan dengan versi PHP

## License

MIT license adalah lisensi perangkat lunak bebas guna yang berasal dari Massachusetts Institute of Technology (MIT). Lisensi ini ringkas dan to the point. Lisensi ini membolehkan pengguna untuk melakukan apapun pada kode program seperti pada Apache License. Lisensi ini hanya mewajibkan pengguna untuk menyertakan lisensi dan copyright si pembuat pada kode yang didistribusikan ulang dan tidak ada larangan untuk menggunakan trademark dari si pembuat asli. Selain itu pengguna juga tidak berhak untuk menuntut si pembuat ketika terjadi kerusakan pada perangkat lunak tersebut.
[MIT license](https://opensource.org/licenses/MIT).

link : https://codepolitan.com/blog/8-open-source-license-populer-yang-mesti-diketahui
