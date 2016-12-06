#!/bin/bash
echo "installing composer"
composer install
echo "Migrating"
php artisan migrate
echo "Installing Node"
npm install
echo "generating key"
php artisan key:generate
echo "bye"
