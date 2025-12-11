# Setup Laravel Sail + Octane (FrankenPHP)

### 1. Download Project (MySQL & Redis)
Download installer Laravel, MySQL, dan Redis via terminal Ubuntu:

```bash
curl -s "https://laravel.build/my-project?with=mysql,redis" | bash
```

### 2. Masuk Folder & Nyalakan Docker
Masuk ke direktori project dan jalankan container Sail:

```bash
cd my-project && ./vendor/bin/sail up -d
```

### 3. Install Octane
Install library Laravel Octane:

```bash
./vendor/bin/sail composer require laravel/octane
```

### 4. Install FrankenPHP
Download binary server FrankenPHP:

```bash
./vendor/bin/sail artisan octane:install --server=frankenphp
```

### 5. Install chokidar
```bash
./vendor/bin/sail npm install chokidar --save-dev
```

### 6. Jalankan Server
Matikan container standar, lalu jalankan server Octane (FrankenPHP):
```bash
./vendor/bin/sail stop
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan octane:start --server=frankenphp --watch
```

Web bisa diakses di: http://localhost:8000
