FROM debian:buster

RUN apt-get update && apt-get -y install mariadb-server mariadb-client

EXPOSE 3306

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www/

RUN service mysql start && mysql < /var/www/initial_db.sql && rm -f /var/www/initial_db.sql;

RUN service mysql stop
CMD ["mysqld"]
