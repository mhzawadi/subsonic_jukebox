FROM alpine:3.9.4
MAINTAINER Matthew Horwood <matt@horwood.biz>

COPY . /jukebox/

RUN apk update                                  \
    &&  apk add php7-apache2 php7-curl php7-dom php7-xml php7-xmlwriter \
    php7-tokenizer php7-simplexml composer \
    && rm -f /var/cache/apk/* \
    && chmod +x /jukebox/start.sh \
    && su -c 'cd /jukebox && composer install' apache

EXPOSE 80

ENTRYPOINT ["/jukebox/start.sh"]
