FROM php:8-fpm

WORKDIR /app

# Update and install all nedeed library
RUN apt-get update -qq \
    && apt-get install -qy git gnupg libicu-dev libzip-dev libonig-dev unzip zip zlib1g-dev \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
    && docker-php-ext-configure zip \
    && docker-php-ext-install -j$(nproc) intl opcache pdo_mysql zip mbstring \
    && pecl install apcu \
    && pecl install xdebug

# Configuration PHP
COPY php.ini /usr/local/etc/php/conf.d/app.ini