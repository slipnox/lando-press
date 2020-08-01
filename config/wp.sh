#!/bin/sh

export $(egrep -v '^#' ./config/.env | xargs)

echo "[---------------- Downloading Latest Wordpress ----------------]"
wp core download --path=$WP_DIR --force

rm -rf wordpress/wp-content/themes/tw*
rm -rf wordpress/wp-content/plugins/aki*
rm -rf wordpress/wp-content/plugins/hello.php

echo "Installing Plugin Dependencies..."
composer install

echo "[-------------------- Installing Wordpress --------------------]"

wp core install \
--url=$WP_SITEURL \
--title=$SITE_TITLE \
--admin_user=$ADMIN_USER \
--admin_password=$ADMIN_PASSWORD \
--admin_email=$ADMIN_EMAIL
