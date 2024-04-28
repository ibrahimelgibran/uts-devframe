<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project Laravel

Laravel 11 Multi Auth using Breeze with CRUD Admin & User.

Tech Stack Use :

-   Laravel v11
-   Breeze
-   TailwindCSS
-   Bootstrap v5
-   MYSQL Workbench

The following is the tech stack that i use for building the application system.

## How to run project

Clone this project:

```bash
git clone https://github.com/ibrahimelgibran/uts-devframe.git
```

Install Composer:

```bash
install composer
```

Configuration from '.env.example' file to '.env file.'

```bash
cp .env.example .env
```

Edit the db connection section of the file .env:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=utsmyapp
DB_USERNAME=root
DB_PASSWORD=
```

Install Laravel Breeze using Composer:

```bash
composer require laravel/breeze --dev
```

Install "breeze:install" frontend stack and testing framework:

```bash
php artisan breeze:install
```

Install node:

```bash
npm install
```

Running migrasi database:

```bash
php artisan migrate
```

Run laravel server:

```bash
php artisan serve
```

Run node server:

```bash
npm run dev
```

## Demo using NGROK

### Open Terminal or CommandLine.

Install [ngrok](https://ngrok.com/download) via [Homebrew](https://formulae.brew.sh/cask/ngrok):

```bash
brew install ngrok/ngrok/ngrok
```

Run the following command to add your authtoken to the default ngrok.yml:

```bash
ngrok config add-authtoken xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```

Running on port:

```bash
ngrok http http://localhost:8000
```

Access to url on forwarding.

<img src="/public/team/ngrok.png">

That is all and thank you 👨🏻‍💻.
