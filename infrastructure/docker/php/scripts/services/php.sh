#!/usr/bin/env bash

function install_composer()
{
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
}

function install_php_intl()
{
    apt-get install -y libicu-dev && docker-php-ext-install -j$(nproc) intl
}