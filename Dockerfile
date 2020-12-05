FROM php:7.2-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql

RUN php /var/www/html/artisan migrate

RUN php /var/www/html/artisan db:seed