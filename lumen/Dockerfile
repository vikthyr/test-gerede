FROM php:8.4-apache
RUN apt-get update && apt-get upgrade -y && apt-get install -y \
    git \
    unzip \
    zip \
    dos2unix
RUN docker-php-ext-install pdo pdo_mysql
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY . .
RUN mv dependencies/dockerize /usr/local/bin/
RUN chmod +x /usr/local/bin/dockerize
RUN chmod +x entrypoint.sh
RUN dos2unix entrypoint.sh
RUN composer install
RUN composer update
EXPOSE 8001
ENTRYPOINT ["sh", "entrypoint.sh"]
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]