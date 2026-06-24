FROM php:8.3-apache

# 1. Install system dependencies and SQLite tools
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    sqlite3 \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_sqlite \
    && a2enmod rewrite

# 2. Set the working directory
WORKDIR /var/www/html

# 3. Copy Apache configuration
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# 4. Copy project files
COPY . .

# 5. Install Composer dependencies
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-interaction --optimize-autoloader --no-dev

# 6. Set up SQLite database file and permissions
RUN mkdir -p database \
    && touch database/database.sqlite \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache database

EXPOSE 80

CMD ["apache2-foreground"]