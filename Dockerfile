# First draft version of jetchoko app Dockerfile

FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www

# Install useful dependencies
RUN apt-get update && apt-get install -y \
    curl \
    libonig-dev \
    libzip-dev \
    unzip \
    vim \
    zip \
    git \
    build-essential

# Install php extensions
RUN docker-php-ext-install mysqli pdo_mysql
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install zip


# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add a new user for laravel application
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
