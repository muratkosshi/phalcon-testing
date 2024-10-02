# Используем PHP 7.4
FROM php:7.4-fpm

# Переменные окружения
ENV USER_NAME=murat_developer
ENV USER_HOME=/home/murat_developer

# Создаем пользователя murat_developer
RUN useradd -m murat_developer

# Установка необходимых пакетов
RUN apt-get update && apt-get install -y \
    libpcre3-dev \
    apt-utils \
    curl \
    git \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    libzip-dev \
    zip unzip \
    cron \
    supervisor \
    build-essential \
    re2c \
    libssl-dev

# Установка PHP-расширений
RUN docker-php-ext-install pdo pdo_mysql intl zip gd bcmath

# Установка Phalcon 4 через PECL (указываем нужную версию)
RUN pecl channel-update pecl.php.net && pecl install phalcon-5.4.0 && docker-php-ext-enable phalcon

# Устанавливаем Composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

# Устанавливаем Xdebug
RUN pecl install xdebug-2.9.8 \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini





# Копируем конфигурационные файлы
COPY ./_docker/app/php.ini /usr/local/etc/php/conf.d/php.ini
COPY ./_docker/app/supervisor/ /etc/supervisor/conf.d
COPY ./_docker/app/cronlab/cronjob /etc/cron.d/my-cronjob

# Устанавливаем права и рабочую директорию
RUN chmod -R 777 /var/www/
WORKDIR /var/www/
RUN composer global require phalcon/devtools:"^5.0@dev" --dev
RUN ln -s ~/.composer/vendor/phalcon/devtools/phalcon /usr/local/bin/phalcon


