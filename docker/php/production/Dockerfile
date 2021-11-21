FROM php:8-fpm

RUN apt-get update && apt-get install -y curl git zip && apt-get clean

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .
RUN composer ins
