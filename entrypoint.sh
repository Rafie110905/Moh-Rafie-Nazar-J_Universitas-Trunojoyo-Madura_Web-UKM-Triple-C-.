#!/bin/bash
set -e

# Render menyediakan env var PORT secara dinamis, fallback ke 80 kalau tidak ada
export PORT="${PORT:-80}"

# Ganti port di Apache ports.conf
sed -i "s/Listen 80/Listen ${PORT}/g" /etc/apache2/ports.conf

# Generate virtual host config dari template dengan substitusi env var
envsubst '${PORT} ${APACHE_DOCUMENT_ROOT}' < /etc/apache2/sites-available/000-default.conf.template > /etc/apache2/sites-available/000-default.conf

echo "Menjalankan Apache di port ${PORT}, document root: ${APACHE_DOCUMENT_ROOT}"

exec apache2-foreground
