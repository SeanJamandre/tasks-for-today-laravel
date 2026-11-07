# Tasks for Today Management System

Simple Laravel implementation for IT0049 TSA3.

## Features

- Welcome page at `/` showing only today's tasks
- Full task list at `/tasks`, ordered by task date
- Profile page at `/profile` showing one user
- Static About page at `/about`
- SQLite database with migrations and seed data

## Requirements

- PHP 8.2 or newer
- Composer

## Setup

```bash
composer install
copy .env.example .env
php artisan key:generate
type nul > database/database.sqlite
php artisan migrate --seed
php artisan serve
```

On macOS/Linux, replace the Windows `copy` and `type` commands with:

```bash
cp .env.example .env
touch database/database.sqlite
```

Open `http://127.0.0.1:8000` in a browser.

The seeder creates one user and eight tasks across today, tomorrow, and two days from today. Change the developer name in `resources/views/about.blade.php` if needed.
