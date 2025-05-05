FROM php:7.4-apache

LABEL org.opencontainers.image.authors="deividfortuna@gmail.com"

RUN apt-get update
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite

EXPOSE 80