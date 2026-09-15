FROM php:8.2-apache

# Install ekstensi PHP yang umum dipakai (tambah/kurangi sesuai kebutuhan)
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    unzip \
    git \
    gettext-base \
    && docker-php-ext-install pdo pdo_mysql mysqli mbstring zip gd exif \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Aktifkan mod_rewrite (berguna untuk framework seperti Laravel/CodeIgniter)
RUN a2enmod rewrite

# Set document root ke /var/www/html/public (ubah jadi /var/www/html jika tidak pakai folder public)
ENV APACHE_DOCUMENT_ROOT=/var/www/html

# Copy source code project ke dalam container
COPY . /var/www/html

WORKDIR /var/www/html

# Install dependency lewat Composer jika ada composer.json
RUN if [ -f composer.json ]; then \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-dev --optimize-autoloader --no-interaction; \
    fi

# Beri permission yang wajar
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Copy config Apache & entrypoint
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf.template
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]
