# Contributing

## Setup

1. clone the repository
2. run composer install
3. copy the config/config.example.php to config/config.php
4. edit the config file with your subsonic address, username and password (see the API page)[<http://www.subsonic.org/pages/api.jsp>]
5. point you browser at the site

You will also need to setup a python enviroment, see below

```
python3 -m venv .env
source .env/bin/activate
pip install -r requirements.txt
```

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/mhzawadi/subsonic_jukebox/tags).

## Conventional Commits

We use [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/#summary) for our commits, this allows us to automatically generating CHANGELOGs.

The 2 python tools conventional-commit and auto-changelog help in keeping thing tidy.
