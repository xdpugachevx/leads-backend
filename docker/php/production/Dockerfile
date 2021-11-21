FROM php:8-fpm-alpine

RUN apk add curl git zip --no-cache

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app
RUN chown www-data:www-data /app
COPY --chown=www-data:www-data ./composer.* /app/

USER www-data
RUN COMPOSER_CACHE_DIR=/dev/null composer install --optimize-autoloader --no-dev --no-scripts
COPY --chown=www-data:www-data ./ /app
USER root
