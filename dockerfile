# Step 1: Use a base PHP image with necessary extensions (upgraded to PHP 8.2)
FROM php:8.2-fpm-alpine

# Step 2: Set environment variable to allow Composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Step 3: Install system dependencies and PHP extensions
RUN apk add --no-cache \
    bash \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    zip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql opcache zip

# Step 4: Install Composer (PHP package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Step 5: Install Symfony CLI properly
RUN apk add --no-cache bash
RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.alpine.sh' | bash
RUN apk add symfony-cli

# Step 6: Add git safe directory configuration to fix ownership issues
RUN git config --global --add safe.directory /var/www/html

# Step 7: Set working directory inside the container
WORKDIR /var/www/html

# Step 8: Copy composer files first for better caching
COPY composer.json composer.lock ./

# Step 9: Install symfony/runtime package before main installation
RUN composer require symfony/runtime --no-scripts

# Step 10: Copy the rest of the application
COPY . .

# Step 11: Create a custom script to handle symfony commands
RUN echo '#!/bin/sh' > /usr/local/bin/symfony-cmd && \
    echo 'php bin/console "$@"' >> /usr/local/bin/symfony-cmd && \
    chmod +x /usr/local/bin/symfony-cmd

# Step 12: Install app dependencies via Composer - skip auto-scripts to avoid bundle issues
RUN composer install --no-interaction --prefer-dist --no-scripts

# Step 13: Expose the port your app will run on
EXPOSE 8000

# Step 14: Configure app permissions and run any necessary setups
RUN chown -R www-data:www-data var

# Step 15: Set the command to run Symfony using PHP's built-in web server
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public/"]
