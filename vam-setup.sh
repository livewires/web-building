#!/usr/bin/env bash
sudo add-apt-repository -y ppa:ondrej/php5
sudo apt-get update
sudo apt-get install -y apache2 curl
sudo apt-get install -y exfat-fuse exfat-utils
sudo ufw allow in "Apache Full"

# Go install a LAMP stack
sudo apt-get install -y php5-gd php5 libcurl3 libcurl3-dev php5-curl
sudo apt-get install -y php5-fpm php5-cli php5-curl php5-json php5-gd php5-mcrypt php5-xdebug php5-memcached php5-imagick php5-intl
echo 'PHP installed'

sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password mypass'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password mypass'
sudo apt-get -q -y install mysql-server-5.5 php5-mysql

sudo a2enmod rewrite

sudo usermod -a -G www-data doc
sudo chown -R www-data:www-data /var/www
sudo getfacl /var/www
sudo setfacl -R -m u:doc:rwx /var/www
sudo setfacl -Rd -m u:doc:rwx /var/www
sudo getfacl /var/www

sudo setfacl -R -m g:www-data:rwx /var/www
sudo setfacl -Rd -m g:www-data:rwx /var/www
sudo getfacl /var/www

mkdir ~/Sites
ln -s /var/www/html ~/Sites


sudo apt-get install -y gedit
