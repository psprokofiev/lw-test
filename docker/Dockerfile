FROM php:8.1.14-fpm-buster

ENV COMPOSER_VERSION 2.5.1
ENV NODE_VERSION "18.x"

RUN apt-get update -y
RUN apt install -y apt-utils

# Install dependencies
RUN apt install -qq -y \
    curl \
    git \
    libzip-dev \
    libpq-dev \
    zlib1g-dev \
    zip unzip

RUN apt install -y \
    libmcrypt-dev \
    libicu-dev \
    libxml2-dev

# Install extensions
RUN docker-php-ext-install \
    exif \
    bcmath \
    pcntl \
    zip \
    pdo \
    ctype \
    fileinfo \
    xml \
    intl

# Clear cache
RUN apt clean \
  && rm -rf /var/lib/apt/lists/*

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --version=${COMPOSER_VERSION} --filename=composer \
    && chmod +x /usr/local/bin/composer \
    && mkdir -p /.composer && chmod -R 777 /.composer

# Node
RUN curl -fsSL https://deb.nodesource.com/setup_${NODE_VERSION} | bash -
RUN apt install -y nodejs
RUN mkdir /.npm && chmod -R 777 /.npm
RUN npm install --global cross-env

RUN rm /bin/sh && ln -s /bin/bash /bin/sh

# Fix tinker
RUN mkdir -p /.config/psysh && chmod -R 777 /.config

WORKDIR /var/www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
