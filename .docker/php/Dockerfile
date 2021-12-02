FROM php:7.4.6-fpm-alpine3.11

WORKDIR /var/www

RUN set -ex \
  && apk --no-cache --update add \
  postgresql-dev \
  postgresql \
  libpng-dev \
  libjpeg-turbo-dev \
  freetype-dev \
  rabbitmq-c rabbitmq-c-dev \
  zip \
  jpegoptim optipng pngquant gifsicle \
  vim \
  unzip \
  git \
  curl \
  exiftool \
  oniguruma-dev \
  libzip-dev \
  php7-pecl-amqp \
  php7-pecl-redis \
  redis

RUN docker-php-ext-configure exif \
  && docker-php-ext-install exif \
  && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
  && docker-php-ext-install mbstring zip exif pcntl pdo pdo_pgsql \
  && docker-php-ext-configure gd \
  && docker-php-ext-install gd \
  && docker-php-ext-configure zip \
  && docker-php-ext-enable exif \
  && docker-php-ext-enable amqp \
  && docker-php-ext-enable redis

RUN docker-php-ext-install \
    pdo pdo_mysql zip xsl gd intl opcache exif mbstring

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]