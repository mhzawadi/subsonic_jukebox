FROM nginx/unit:1.13.0-php7.0
MAINTAINER Matthew Horwood <matt@horwood.biz>

COPY . /jukebox/

RUN apt update                                                             \
    && apt install -y apt-transport-https gnupg1                           \
    && curl https://packages.sury.org/php/apt.gpg | apt-key add -          \
    && echo "deb https://packages.sury.org/php/ stretch main"              \
         >> /etc/apt/sources.list.d/php.list                               \
    &&  apt -y install php-pear php7.2-xml php7.2-cli php7.2-common        \
     php7.2-curl libapache2-mod-php7.2 php7.2-gd php7.2-imap php7.2-intl   \
     php7.2-json php7.2-mysql php7.2-radius php7.2-apcu php7.2-xmlrpc      \
     php7.2-memcached php-db php7.2-xmlrpc php7.2-redis php7.2-gmp         \
     php7.2-zip php7.2-mb                                                  \
    && useradd -ms /bin/bash jukebox

#USER jukebox
#WORKDIR /jukebox
#RUN composer install
