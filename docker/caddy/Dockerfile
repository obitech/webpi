FROM hypriot/rpi-alpine:3.5

EXPOSE 80 2015

RUN apk update && apk upgrade && apk add curl wget php7-fpm \
    php7-curl php7-session php7-pdo_mysql \
    && mkdir /srv/db

# Install caddy
RUN curl --silent --show-error --fail --location \
      --header "Accept: application/tar+gzip, application/x-gzip, application/octet-stream" -o - \
    "https://caddyserver.com/download/linux/arm7?plugins=${plugins}" \
    | tar --no-same-owner -C /usr/bin/ -xz caddy \
    && chmod 0755 /usr/bin/caddy

# Install adminer
COPY ./adminer.php /srv/db/

# Caddy config file will be mounted in /etc/
CMD caddy --conf /etc/Caddyfile --log stdout
