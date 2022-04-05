FROM php:8.1.4-apache-bullseye
RUN docker-php-ext-install pdo_mysql
COPY src/ /var/www/html/
