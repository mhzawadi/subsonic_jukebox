FROM alpine:3.9.4
MAINTAINER Matthew Horwood <matt@horwood.biz>

COPY . /jukebox/

RUN apk update                                                             \
    &&  apk add php7-apache2 php7-curl                                     \
    && rm -f /var/cache/apk/* \
    && adduser -ms /bin/bash jukebox

#USER jukebox
#WORKDIR /jukebox
#RUN composer install

EXPOSE 80

RUN chmod +x /jukebox/start.sh

ENTRYPOINT ["/jukebox/start.sh"]
