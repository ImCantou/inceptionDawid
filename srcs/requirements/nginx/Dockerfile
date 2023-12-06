FROM debian:buster

RUN apt-get -y update && apt-get install nginx openssl -y 

RUN chmod -R 755 /var/www /var/www/html

#COPY ./certifs/myserver.crt /etc/nginx/ssl/server.crt
COPY ./certifs/server.key /etc/nginx/ssl/server.key
COPY ./certifs/server.pem /etc/nginx/ssl/server.pem
COPY ./conf/nginx.conf /etc/nginx/sites-available/default

EXPOSE 443

CMD ["/usr/sbin/nginx", "-g", "daemon off;"]
