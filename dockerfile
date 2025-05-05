# Step 1: Use a base PHP image with necessary extensions (upgraded to PHP 8.2)
FROM php:8.2-fpm-alpine

# Step 2: Install system dependencies and PHP extensions
RUN apk add --no-cache \
    bash \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    zip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql opcache

# Step 3: Install Composer (PHP package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Step 4: Add git safe directory configuration to fix ownership issues
RUN git config --global --add safe.directory /var/www/html

# Step 5: Set working directory inside the container
WORKDIR /var/www/html

# Step 6: Copy your Symfony app to the container
COPY . .

# Step 7: Install app dependencies via Composer
RUN composer install --no-interaction --prefer-dist

# Step 8: Expose the port your app will run on
EXPOSE 8000

# Step 9: Set the command to run Symfony using the PHP FPM server
CMD ["php-fpm"]
