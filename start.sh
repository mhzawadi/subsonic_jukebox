#!/bin/sh

# Setup unit with configuration
ln -sf /dev/stdout /var/log/unit.log

cp /jukebox/src/config/config.docker.php /jukebox/src/config/config.php

unitd --no-daemon --state /jukebox/
