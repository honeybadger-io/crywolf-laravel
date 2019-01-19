FROM php:7.2-apache

RUN a2enmod rewrite

COPY .docker/web/apache/000-default.conf /etc/apache2/sites-enabled/000-default.conf
