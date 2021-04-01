FROM php:7.4-fpm

RUN echo "deb [check-valid-until=no] http://deb.debian.org/debian stretch main" > /etc/apt/sources.list.d/stretch.list
RUN echo "deb [check-valid-until=no] http://deb.debian.org/debian stretch-updates main" > /etc/apt/sources.list.d/stretch-updates.list

RUN sed -i '/deb http:\/\/deb.debian.org\/debian stretch main/d' /etc/apt/sources.list
RUN sed -i '/deb http:\/\/deb.debian.org\/debian stretch-updates main/d' /etc/apt/sources.list

RUN echo "Acquire::Check-Valid-Until \"false\";" >> /etc/apt/apt.conf

RUN apt-get update && apt-get install -y libbz2-dev \
    && docker-php-ext-install bz2

RUN apt-get install -y libmagickwand-dev imagemagick --no-install-recommends cron nano \
    && pecl install imagick \
    && docker-php-ext-enable imagick

RUN apt-get install -y mariadb-client \
    && docker-php-ext-install pdo_mysql

RUN apt-get install -y openssl

RUN apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

RUN docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli

# Install zip
RUN apt-get install -y \
         libzip-dev \
         && docker-php-ext-install zip

# Install XDebug
RUN pecl install xdebug-2.8.1 && docker-php-ext-enable xdebug
COPY config/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
