#!/usr/bin/env bash

sudo apt-get install -y curl build-essential software-properties-common python-software-properties

cd /vagrant/

# Set up to get a backported version of PHP 5.4.10
sudo add-apt-repository ppa:ondrej/php5-oldstable
sudo apt-get update

# Go install Apache and PHP
sudo apt-get -q -y install php5-gd apache2 php5
sudo apt-get -q -y install curl libcurl3 libcurl3-dev php5-curl

# Configure apache to look at the correct folder, and enable symlinks
rm -rf /var/www
ln -fs /vagrant/www /var/www
a2enmod rewrite
sed -i '/AllowOverride None/c AllowOverride All' /etc/apache2/sites-available/default
service apache2 restart

echo 'And away we go...'
