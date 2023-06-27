# Building you laravel app image
# you start by downloading php and its extensions
# Then you install compose and you copy you app files

FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    curl \
    libonig-dev \
    libzip-dev \
    unzip

RUN docker-php-ext-install mysqli pdo_mysql
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install zip


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

EXPOSE 8080
CMD ["php-fpm"]
