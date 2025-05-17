# Stage 1: Build the app
FROM php:8.2-fpm as builder

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-interaction --no-scripts --no-dev
RUN chown -R www-data:www-data /var/www/html/storage
RUN chmod -R 775 /var/www/html/storage

# Stage 2: Production image
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    && docker-php-ext-install pdo_mysql mbstring

# Copy built artifacts from builder
COPY --from=builder /var/www/html /var/www/html
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# Configure Nginx and PHP
RUN chown -R www-data:www-data /var/www/html/storage
RUN chmod -R 775 /var/www/html/storage

# Expose port 10000 for Render
EXPOSE 10000

# Start script
COPY docker/start.sh /usr/local/bin/start
RUN chmod +x /usr/local/bin/start
CMD ["/usr/local/bin/start"]