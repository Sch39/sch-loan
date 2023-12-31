# Tahap Menjalankan Aplikasi
<img src='./public/icon.png' alt='icon' width='80px' />

By [Sukron Chafidhi](https://profile.sch39.dev)

## Clone Repo
Silahkan clone repo dari github menggunakan command:
```
git clone https://github.com/Sch39/sch-loan.git
```

## Install Package
Setelah berhasil meng-clone, silahkan arahkan terminal ke repo, lalu jalankan command dibawah.
### Install Php Package
```
composer install
```

### Install Php Package
```
npm install
```
## Buat Database
Silahkan buat database dengan cara menjalankan server postgre, masuk ke command psql kemudian buat database menggunakan command.
### Menjalankan postgresql di Windows(menggunakan powershell)
Sebelum menjalankan command, pastikan jika sudah menambahkan folder bin postgresql ke environment variable path, dan membuat variable baru bernama postgre_data dengan value berupa letak folder data postgresql. 
```
postgres -D $env:postgre_data
```

### Masuk ke command psql(menggunakan powershell)
```
psql -U postgres
```
setelahnya akan dimintai password, masukan passwordnya kemudian enter.

### Membuat databse dengan psql(menggunakan powershell)
Setelah berhasil masuk ke psql silahkan ketikan command berikut kemudian enter.
```
CREATE DATABASE namadatabase;
```
Untuk keluar dari psql silahkan masukan command.
```
\q
```


## Setting environment
Silahkan copy file .env.example menjadi .env dengan command.
```
cp .env.example .env
```

Setelahnya edit file .env pada bagian databse dan sesuaikan dengan database yang telah dibuat

## Migrasi database
Untuk menjalankan migrasi dan seeder bisa menggunakan command berikut.
```
php artisan migrate:refresh --seed
```

## Run Applikasi
Untuk merender front end dengan vite dapat menggunakan command berikut
```
npm run dev
```
atau dengan cara build
```
npm run build
```

Kemudian jalankan comman berikut untuk memulai server backend laravel
```
php artisan serve --port=8000
```
Maka aplikasi dapat diakses pada http://localhost:8000


## Password dan email login

### Admin
```
'username' => 'admin',
'email' => 'admin@sch39.dev',
'password' => bcrypt('root'),
```
### Approver lv 1

```
'id' => 2,
'username' => 'approver 1',
'email' => 'approver1@sch39.dev',
'password' => bcrypt('root'),

'id' => 3,
'username' => 'approver 2',
'email' => 'approver2@sch39.dev',
'password' => bcrypt('root'),
```

### Approver lv 2
```
'username' => 'approver 3',
'email' => 'approver3@sch39.dev',
'password' => bcrypt('root'),

'username' => 'approver 4',
'email' => 'approver4@sch39.dev',
'password' => bcrypt('root'),

```