FROM mcr.microsoft.com/devcontainers/php:7.4

# Instal server web Apache
RUN apt-get update && apt-get install -y apache2 libapache2-mod-php

# Salin semua file proyek ke dalam direktori default Apache
COPY . /var/www/html

# Menyalakan Apache di background saat container berjalan
CMD ["apachectl", "-D", "FOREGROUND"]
