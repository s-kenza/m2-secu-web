#!/bin/sh

set -e

# Fix permissions
echo "Fixing permissions..."
chown -R www-data:www-data /var/www/app/var/cache /var/www/app/var/log
chmod -R 775 /var/www/app/var/cache /var/www/app/var/log
chown -R www-data:www-data /var/www/app/public/uploads/images
chmod -R 755 /var/www/app/public/uploads/images
chown -R www-data:www-data /var/www/app/src
chmod -R 777 /var/www/app/src

# Start PHP-FPM
echo "Starting PHP-FPM..."
exec php-fpm
