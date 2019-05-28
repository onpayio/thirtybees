#!/usr/bin/env bash

# Get composer (From composers own install instructions)
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

# Remove vendor directory
rm -rf vendor

# Run composer install
php composer.phar install

# Remove composer
rm composer.phar

# Zip contents of folder to onpay folder in a zip file
rm onpay.zip
rsync -Rr ./* ./onpay
zip -r onpay.zip ./onpay

# Clean up
rm -rf onpay
