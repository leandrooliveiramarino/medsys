#!/bin/bash

source /tmp/env.sh

echo "---- Iniciando instalação ---"

echo "---- Inserindo repositório do PHP ---"
sudo add-apt-repository ppa:ondrej/php

echo "--- Atualizando lista de pacotes ---"
sudo apt-get update
sudo apt-get -y upgrade

echo "--- Instalando pacotes basicos ---"
sudo apt-get install $ADDITIONAL_SOFTWARES -y

echo "--- Instalando MySQL ---"
debconf-set-selections <<< 'mysql-server-<version> mysql-server/root_password password password'
debconf-set-selections <<< 'mysql-server-<version> mysql-server/root_password_again password password'
sudo apt-get install mysql-server -y
sudo apt-get install mysql-client -y

echo "--- Instalando PHP, Apache e alguns modulos ---"
sudo apt-get install php$PHP_VERSION php$PHP_VERSION-common -y
sudo apt-get install libapache2-mod-php$PHP_VERSION php$PHP_VERSION-cli php$PHP_VERSION-xmlrpc php$PHP_VERSION-soap php$PHP_VERSION-mysql php$PHP_VERSION-curl php$PHP_VERSION-xml php$PHP_VERSION-mcrypt php$PHP_VERSION-mbstring php$PHP_VERSION-gd php$PHP_VERSION-intl php$PHP_VERSION-zip zip unzip -y

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/bin/composer

echo "--- Habilitando mod-rewrite do Apache ---"
sudo a2enmod rewrite

echo "$VIRTUAL_HOST" > /etc/apache2/sites-available/000-default.conf;

echo "--- Instalando pacotes do Composer ---"
composer install -d $VAGRANT_TARGET

echo "--- Instalando NPM, n, node e dependências ---"
sudo apt-get install npm -y
sudo npm install -g n
sudo n latest
npm install --prefix $VAGRANT_TARGET

echo "--- Criando e importando o Banco de Dados ---"
mysql -u $MYSQL_USER_NAME -p$MYSQL_PASSWORD -h $MYSQL_HOST -e "create database $MYSQL_DATABASE_NAME;"
mysql -u $MYSQL_USER_NAME -p$MYSQL_PASSWORD -h $MYSQL_HOST $MYSQL_DATABASE_NAME < $VAGRANT_TARGET/vagrant_files/database/$MYSQL_DUMP_NAME

echo "--- Substituindo o .env ---"
ENV_FILE="$(cat $SYNCFOLDER_TARGET/.env.example)"
eval "echo \"$ENV_FILE\" > $VAGRANT_TARGET/.env"

echo "--- Reiniciando Apache ---"
sudo service apache2 restart

echo "[OK] --- Instalação do ambiente de desenvolvimento concluído ---"
