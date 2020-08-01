# LANDOPRESS - Project Name

## Requirements

* Lando (includes Docker): https://docs.lando.dev/basics/installation.html(https://docs.lando.dev/basics/installation.html)

## Installation

1. Clone this repository: `git clone https://github.com/slipnox/lando-press.git`.
2. Navigate to the root directory Ex: `cd lando-press`.
3. Before start the project you should edit `./config/.lando.yml` and `./config/.env` accordingly to your needs.
4. In the root folder run: `lando start`, this will build the lando app.
5. You can run now `lando install-wp` to download and install wordpress.
6. Perform `lando restart`, this step is important to resync mounted folders.
7. Optionally if you want to install sage theme run `lando install-sage`, this will install and activate roots sage starter theme.

Lando will generate the required services: Nginx Server with PHP 7.4, Node, MySQL, Redis, MailHug and phpMyAdmin.

#### APPSERVER_NGINX URLS

- https://localhost:xxxxx
- http://localhost:xxxxx
- http://wpproject.lndo.site
- https://wpproject.lndo.site
 
#### MAILHOG URLS
- http://localhost:xxxxx
- http://mailhog.lndo.site

#### PMA URLS
- http://localhost:xxxxx
- http://pma.lndo.site

**NOTE:** ***xxxxx*** stands for random ports.

You can now enter in your browser `http://wpproject.lndo.site`

## Development

* You can take advantage of the configured `wpackagist` in the main composer to add plugin dependencies. Ex: `composer require wpackagist-plugin/better-search-replace`
* You can user node commands using `lando yarn`.

## [SAGE]
The sage installation wiill install all needed dependencies in the theme folder you can run:

- `lando yarn start`: start sage browsersync watcher development mode
- `lando yarn bluid`: compile theme build assets
- `lando yarn bluid:production`: compile theme production assets

Structure:

| Location                     | Usage       |
|------------------------------|-------------------------------------|
| ./app                        | sync mounted folders inside wp-content `themes`, `plugins`  |
| ./config                     | configuration files                 |

#### Database Sync

1. Ask the tech lead or PM for a database backup.
2. You can import it: `lando db-import db_backup.sql.gz` or use the provided phpMyAdmin.

## References

* [Wordpress on Lando](https://docs.lando.dev/config/wordpress.html)

