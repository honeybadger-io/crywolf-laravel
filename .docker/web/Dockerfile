FROM php:7.2-apache

RUN apt-get update \
    && apt-get install -y git zip authbind sqlite3 openssl \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer \
    && docker-php-ext-install -j$(nproc) pdo_mysql bcmath \
    && rm -rf /var/lib/apt/lists/* \
    && apt-get clean

RUN a2enmod rewrite

COPY .docker/web/apache/000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY .docker/web/run.sh /usr/local/bin/run.sh

RUN groupadd -g 999 badger \
    && useradd -r -m -u 999 -g badger -G www-data badger \
    && touch /etc/authbind/byport/80 \
    && touch /etc/authbind/byport/443 \
    && chmod 777 /etc/authbind/byport/80 \
    && chmod 777 /etc/authbind/byport/443 \ 
    && chmod -R 770 /var/log/apache2 \
    && chgrp -R www-data /var/log/apache2

USER badger
WORKDIR /var/www/html

CMD ["/usr/local/bin/run.sh"]
