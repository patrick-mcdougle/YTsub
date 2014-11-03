#!/usr/bin/env bash

export DEBIAN_FRONTEND=noninteractive

#Update Ubuntu packages
apt-get -q update
apt-get -q -y upgrade
apt-get -q -y dist-upgrade

#Install mysql
apt-get -q -y install mysql-server
cp /vagrant/vagrant/etc/mysql/conf.d/my.cnf /etc/mysql/conf.d/
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'10.0.2.2' WITH GRANT OPTION;"
service mysql restart

#Install nginx
apt-get -q -y install nginx

#Install php
apt-get -q -y install php5-fpm php5-mysql php5-intl php5-cli
cp /vagrant/vagrant/etc/php5/mods-available/YTsub.ini /etc/php5/mods-available/
php5enmod YTsub
service php5-fpm restart

#Install composer
cd /usr/local/bin
curl -s https://getcomposer.org/installer | php
mv composer.phar composer

#Install symfony dependancies
composer install -d /vagrant/Symfony -n

#Enable symfony root
cp /vagrant/vagrant/etc/nginx/sites-available/Symfony /etc/nginx/sites-available/
ln -s /etc/nginx/sites-available/Symfony /etc/nginx/sites-enabled/
rm /etc/nginx/sites-enabled/default
ln -s /vagrant/Symfony/web /var/www
service nginx restart
