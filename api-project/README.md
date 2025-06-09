# API Project

A REST-like backend built with Laravel. It exposes endpoints for posts, comments and likes while using Sanctum for token authentication.

## Requirements
- PHP 8.2+
- Composer
- Node.js and npm

## Setup
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install && npm run dev
php artisan serve
```

## Features
- Register and log in users with Sanctum
- Create, update and delete posts
- Comment on posts
- Like or unlike posts

## API Endpoints
Authenticated requests use the `auth:sanctum` middleware.

- `POST /api/register` — register a new user
- `POST /api/login` — get an auth token
- `POST /api/logout` — invalidate the token
- CRUD routes for `/api/post`, `/api/comment` and `/api/like`
