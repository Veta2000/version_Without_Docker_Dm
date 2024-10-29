
FROM php:8.0-apache

RUN docker-php-ext-install pdo pdo_mysql

COPY ../src /var/www/html

RUN chown -R www-data:www-data /var/www/html


RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html


RUN apt-get update && apt-get install -y zip unzip
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite
