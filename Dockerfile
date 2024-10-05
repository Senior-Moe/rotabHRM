FROM php:8.3-fpm

WORKDIR /var/www/html

# Mod Rewrite
# RUN a2enmod rewrite

# Linux Library
RUN apt-get update -y && apt-get install -y \
    libicu-dev \
    libmariadb-dev \
    unzip zip \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    libcurl4-openssl-dev \
    libxml2-dev \
    libonig-dev \
    bison

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# PHP Extension
RUN docker-php-ext-install gettext intl mysqli pdo pdo_mysql gd mbstring xml zip curl

# Enable extensions if needed (for some pre-built extensions)
RUN docker-php-ext-enable mbstring xml zip curl

RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

RUN sed -i -e "/^bind-address/d" /etc/mysql/my.cnf


RUN chown -R www-data:www-data /var/www/html

RUN mkdir -pv storage bootstrap


RUN chmod -R 777 /var/www/html/storage

RUN chmod -R 777 /var/www/html/bootstrap
