# Dockerfile
FROM php:8.3.17-fpm
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    curl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j$(nproc) gd pdo_mysql zip mysqli
COPY /wordpress /var/www/html
RUN chown -R www-data:www-data /var/www/html
EXPOSE 9000
CMD ["php-fpm"]