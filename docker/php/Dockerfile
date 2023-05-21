FROM php:8.1-fpm as base

ARG WORK_DIR=/var/task
ARG BUILD_VERSION=unknown

ENV BUILD_VERSION $BUILD_VERSION

RUN apt update \
    && apt install -y wget gnupg2 zlib1g-dev g++ git libicu-dev zip libzip-dev zip \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

RUN wget -O /usr/src/apm-agent-php.deb https://github.com/elastic/apm-agent-php/releases/download/v1.8.2/apm-agent-php_1.8.2_all.deb  \
    && dpkg -i /usr/src/apm-agent-php.deb \
    && rm /usr/src/apm-agent-php.deb

COPY . $WORK_DIR/

RUN chown -R www-data:www-data $WORK_DIR
EXPOSE 9000

FROM base as deploy-push