FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) pdo_mysql \
    && docker-php-ext-install php-mbstring \
    && docker-php-ext-install php-xml 
