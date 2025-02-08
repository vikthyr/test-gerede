FROM php:8.4-apache
RUN apt-get update
RUN apt-get upgrade
RUN apt-get install git
RUN apt-get install unzip
RUN apt-get install php8.4-zip
RUN docker-php-ext-install pdo pdo_mysql
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY . .
EXPOSE 8000
CMD php -S 0.0.0.0:8000 -t public