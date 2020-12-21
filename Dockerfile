FROM debian:buster

# upgrate and install packages
RUN apt-get update && apt-get install -y vim wget openssl nginx \
default-mysql-server php7.3-cli php7.3-fpm php7.3-json php7.3-pdo php7.3-mysql \
php7.3-zip php7.3-gd php7.3-mbstring php7.3-curl php7.3-xml php7.3-bcmath

# download wordpress, extract to /var/www/html
# copy wp-config, change owner
# copy sql sqript
ADD https://wordpress.org/latest.tar.gz wordpress.tar.gz
RUN tar -zxf wordpress.tar.gz && \
 mv wordpress /var/www/html/wordpress

COPY ./srcs/gen-wp-config.php /var/www/html/wordpress/wp-config.php
COPY ./srcs/createdb.sql /createdb.sql

# download phpmyadmin, extract to /var/www/html, change owner
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpmyadmin.tar.gz
RUN tar xfz phpmyadmin.tar.gz && mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpMyAdmin

RUN chown -R www-data:www-data /var/www/html

# copy server config, make slink
COPY ./srcs/mysite.conf /etc/nginx/sites-available/localhost
RUN rm /etc/nginx/sites-enabled/default && \
 ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/default

# copy index_on_off.sh
COPY ./srcs/index_on_off.sh /index_on_off.sh

# gen ssl key and certificate
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-keyout /etc/ssl/private/localhost.key \
	-out /etc/ssl/certs/localhost.crt \
	-subj "/C=RU/ST=Moscow/L=Moscow/O=42/OU=21/CN=localhost"

#copy start bash sqript
COPY ./srcs/start.sh /start.sh

EXPOSE 80 443

CMD ["bash", "start.sh"]
