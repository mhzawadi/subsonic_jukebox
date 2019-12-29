FROM alpine:3.9.4
MAINTAINER Matthew Horwood <matt@horwood.biz>

COPY . /jukebox/

RUN apk update                                  \
    &&  apk add php7-apache2 php7-curl php7-dom php7-xml php7-xmlwriter \
    php7-tokenizer composer \
    && rm -f /var/cache/apk/* \
    && chown -R apache:apache /jukebox

USER apache
WORKDIR /jukebox
RUN composer install

EXPOSE 80

RUN chmod +x /jukebox/start.sh

ENTRYPOINT ["/jukebox/start.sh"]
