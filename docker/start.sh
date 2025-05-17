#!/bin/bash

# Generate application key if not set
if [ -z "$APP_KEY" ]; then
  php artisan key:generate
fi

# Run database migrations
php artisan migrate --force

# Start PHP-FPM
php-fpm -D

# Start Nginx
nginx -g "daemon off;"