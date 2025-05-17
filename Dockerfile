FROM php:8.2-fpm

# Instalar dependencias
RUN apt-get update && apt-get install -y \
    nginx \
    libonig-dev \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip

# Configurar Nginx
COPY docker/nginx/default.conf /etc/nginx/sites-available/default

# Copiar aplicación
WORKDIR /var/www/html
COPY . .

# Permisos
RUN chown -R www-data:www-data /var/www/html/storage \
    && chmod -R 775 /var/www/html/storage

CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]