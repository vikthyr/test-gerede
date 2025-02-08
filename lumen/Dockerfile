FROM php:8.4-apache
RUN apt-get update && apt-get upgrade -y && apt-get install -y \
    git \
    unzip \
    zip
RUN docker-php-ext-install pdo pdo_mysql
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY . .
RUN composer update
EXPOSE 8000
RUN php artisan migrate --force
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]