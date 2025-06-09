# Pixel Positions

A Laravel job board experiment that builds upon the basic listing example by adding tags and a small search engine.

## Features
- Browse and create jobs
- Tag based filtering via `/tags/{tag}`
- Search endpoint `/search`
- Authentication for creating jobs
- Tests written with Pest

## Setup
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install && npm run dev
php artisan serve
```
