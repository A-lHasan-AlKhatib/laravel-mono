# Handy App

A simple job board built during a Laravel tutorial series. The project focuses on CRUD mechanics, user authentication and demonstrates a queue-driven translation job.

## Features
- Browse job listings
- Create, edit and delete jobs when logged in
- User registration and login
- Example queue job for translating a listing

## Setup
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install && npm run dev
php artisan serve
```
