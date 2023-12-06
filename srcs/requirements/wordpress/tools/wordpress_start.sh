#!/bin/sh


if [ ! -f /var/www/html/wp-config.php ]; then
	echo "Wordpress: setting up..."
	mkdir -p /run/php
	mkdir -p /var/run
	touch /run/php/php7.3-fpm.pid
	mkdir -p /var/www/html
	cd /var/www/html
	wp core download --allow-root
	chown -R www-data:www-data /var/www/html
	chown -R www-data:www-data /var/www/html/*
	mv /var/www/wp-config.php /var/www/html/

	echo "Wordpress: creating users..."
	wp core install --allow-root --url=${DOMAIN_NAME} --title=${WP_TITLE} --admin_user=${WP_ADMIN_LOGIN} --admin_password=${WP_ADMIN_PASSWORD} --admin_email=${WP_ADMIN_EMAIL}
	wp user create --allow-root ${WP_USER_LOGIN} ${WP_USER_EMAIL} --role=author --user_pass=${WP_USER_PASSWORD};
	echo "Wordpress: set up!"

fi
exec "$@"
