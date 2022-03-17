FROM alpine:3.15
MAINTAINER Matthew Horwood <matt@horwood.biz>

COPY . /jukebox/

RUN apk update                             \
    && apk add unit-php7 php7-curl php7-dom php7-xml \
    php7-xmlwriter php7-tokenizer php7-simplexml composer \
    && rm -f /var/cache/apk/*              \
    && chmod +x /jukebox/start.sh          \
    && chown -R unit:unit /jukebox     \
    && su -s '/bin/sh' -c 'cd /jukebox && composer install' unit

EXPOSE 80

ENTRYPOINT ["/jukebox/start.sh"]
