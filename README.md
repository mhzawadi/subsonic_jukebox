# Subsonic Jukebox [![Build Status](https://drone.horwood.biz/api/badges/matt/subsonic_jukebox/status.svg)](https://drone.horwood.biz/matt/subsonic_jukebox)

A Subsonic Jukebox manager, it has base functions to add tracks and start or stop. I plan to build out the other functions as I find time, or I get PRs.

## Getting Started

This is a PHP app, so you will need a web server that runs PHP 7.1.

### Prerequisites

- php 7.1
- Subsonic 6.1.4

### Installing

1. clone the repository
2. run composer install
3. copy the config/config.example.php to config/config.php
4. edit the config file with your subsonic address, username and password (see the API page)[<http://www.subsonic.org/pages/api.jsp>]
5. point you browser at the site

```shell
$ git clone https://github.com/mhzawadi/subsonic_jukebox.git
$ cd subsonic_jukebox
$ composer install
$ cp src/config/comfig.example.php src/config/config.php
```

### Docker setup

You can pull my docker image and have it setup in no time
```
wget https://github.com/mhzawadi/subsonic_jukebox/blob/master/docker-compose.yml
docker-compose up -d
```

## Environment variables summary

- SUB_URL: the URL for the jukebox site (including any ports) e.g. jukebox.example.com
- SUB_ADDR: the address of subsonic e.g. 192.168.1.1
- SUB_USER: your username
- SUB_PASS: your md5(password + salt)
  - For example: if the password is sesame and the random salt is c19b2d, then token = md5("sesamec19b2d") = 26719a1196d2a940705a59634eb18eab
- SUB_SALT: the salt you used to make your hash

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags).

## Authors

- **Matthew Horwood** - _Initial work_ - [mhzawadi](https://github.com/)
