FROM php:8.2-fpm as builder

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    nginx \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-interaction --no-scripts --no-dev
RUN chown -R www-data:www-data /var/www/html/storage
RUN chmod -R 775 /var/www/html/storage

# Production stage
FROM php:8.2-fpm

# Install production dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    libonig-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=builder /var/www/html /var/www/html
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# Permissions
RUN chown -R www-data:www-data /var/www/html/storage
RUN chmod -R 775 /var/www/html/storage

EXPOSE 10000

COPY docker/start.sh /usr/local/bin/start
RUN chmod +x /usr/local/bin/start
CMD ["/usr/local/bin/start"]