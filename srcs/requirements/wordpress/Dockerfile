FROM debian:buster

RUN apt-get update && apt-get -y install php7.3 php-mysqli php-fpm wget && apt-get -y install mariadb-client

EXPOSE 9000

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

COPY ./tools /var/www/

ENTRYPOINT [ "/var/www/wordpress_start.sh" ]

CMD    ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
