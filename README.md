# WebPi

Run a Docker setup of [Caddy](https://caddyserver.com/) + [MariaDB](https://mariadb.org/) + Adminer on your Raspberry Pi with one simple command! 

### How To
1. Set up your Raspberry Pi with [HypriotOS](http://blog.hypriot.com/getting-started-with-docker-on-your-arm-device/ "HypriotOS - Getting Started").
2. Install git on your Pi via ``sudo apt-get install git`` and clone this repo.
3. Set your preferrences (see below).
4. Build your docker image for caddy
5. ``cd`` into ``docker/`` and run ``docker-compose -f webpi.yaml up -d``

If everything works you should see "Hello World" via http://192.168.0.XX (the IP for your Pi). Manage your database via Adminer on 192.168.0.XX:2015.


### Default Ports
Service | Port
---|---
Caddy | 80
MariaDB | 3306
Adminer | 2015

### Preferences
Make sure to change the following settings:
Service | Folder | Contents
---|---|---
docker-compose file | ``docker/webpi.yaml`` | Set the name for your caddy image under _web: ... image:_
docker-compose file | ``docker/webpi.yaml`` | Change your MY_SQL settings under _environment_
index.php | ``caddy/www/index.php`` | Set values for accessing MariaDB via PHP

### Caddy
The Caddyfile will be taken from ``docker/caddy/`` and mounted into ``/etc/Caddyfile`` inside the container. ``www/`` will be mounted into ``/srv/www/``

### MariaDB
A fresh instance of MariaDB will be mounted into ``/var/lib/mysql/`` inside the container. If you have any existing databases, just move them into ``mariadb/db`` before you run ``docker-compose`` !
