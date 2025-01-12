# Laravel Reverb with Vite and Livewire.

This is a basic example application of Laravel Reverb with Vite and Livewire.

## Installation

Use the following commands:

```apache
composer install
npm install
```

Setup your .env variables:

```apache
REVERB_APP_ID=XXX
REVERB_APP_KEY=XXX
REVERB_APP_SECRET=XXX
REVERB_HOST="localhost"
REVERB_PORT=8080
REVERB_SCHEME=http
```

If Reverb isn't installed yet, try

```apache
php artisan install:broadcasting
```

## Run

Run the application:

```apache
php artisan serve
npm run dev
php artisan reverb:start
```
