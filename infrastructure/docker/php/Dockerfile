FROM php:8.2.3-cli

RUN mkdir -p /var/www/scripts
COPY scripts/ /var/www/scripts/php
RUN cd /var/www/scripts/php && bash ./provision.sh && rm -rf /var/www/scripts

WORKDIR /var/www/html