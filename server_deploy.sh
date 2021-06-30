#!/bin/sh
set -e
echo "Deploying application ..."
# Enter maintenance mode
(php artisan down --message 'The app is being (quickly!) updated. Please try again in a minute.') || true
    # Install dependencies based on lock file
    echo "Install Composer Dependencies!"
    composer install --no-interaction --prefer-dist --optimize-autoloader
    # Migrate database
    echo "Run Laravel Migration"
    php artisan migrate --force
    # Clear cache
    echo "Clear cache"
    php artisan cache:clear
    php artisan config:clear
    php artisan view:clear
# Exit maintenance mode
php artisan up
echo "Application deployed!"
