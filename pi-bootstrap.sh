# LiveWires RaspPi bootstrap

# Update the things
sudo apt-get update sudo apt-get upgrade
sudo rpi-update

# LAP Stack. Who needs MySQL anyway!
sudo apt-get -q -y install php5-gd apache2 php5

# Install gEdit, Chromium and some fonts
sudo apt-get -q -y install gedit chromium-browser ttf-mscorefonts-installer

# Modify the hosts file...


# Mod permissions
sudo useradd -G www-data pi
sudo chown pi /var/www/

# Got everything? REBOOT!
sudo reboot
