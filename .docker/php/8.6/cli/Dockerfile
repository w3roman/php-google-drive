FROM php:8.6.0-cli-alpine

RUN apk add --no-cache oniguruma-dev \
    && docker-php-ext-install mbstring

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --quiet
