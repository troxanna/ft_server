
FROM debian:buster-slim

RUN apt update && apt install -y nginx bash wget openssl php7.3-fpm php-mysql php7.3 mariadb-server php-mbstring

#SSL
RUN openssl req -x509 -nodes -subj "/C=RU/O=troxanna\ site/CN=troxanna.ft_server.com/emailAddress=troxanna@ft_server.com" \
						-days 365 -newkey rsa:2048 -keyout /etc/ssl/private/ft_server.key -out /etc/ssl/certs/ft_server.crt

#NGINX
COPY ./srcs/nginx_config /etc/nginx/sites-available
RUN  ln -s /etc/nginx/sites-available/nginx_config /etc/nginx/sites-enabled && rm /etc/nginx/sites-enabled/default

#WordPress
RUN wget https://wordpress.org/latest.tar.gz
RUN mkdir /var/www/WordPress && tar -C /var/www/WordPress -xvzf latest.tar.gz --strip-components 1
RUN rm latest.tar.gz
COPY ./srcs/wp-config.php /var/www/WordPress

RUN chown -R www-data:www-data /var/www/ && chmod -R g+w /var/www/

#phpMyAdmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN mkdir /var/www/phpMyAdmin && tar -C /var/www/phpMyAdmin -xvzf phpMyAdmin-4.9.0.1-all-languages.tar.gz --strip-components 1
RUN rm phpMyAdmin-4.9.0.1-all-languages.tar.gz
COPY ./srcs/config.inc.php /var/www/phpMyAdmin
RUN ln -s /var/www/phpMyAdmin /var/www/WordPress
RUN mkdir /var/www/phpMyAdmin/tmp && chmod -R 777 /var/www/phpMyAdmin/tmp

EXPOSE 80 443

COPY ./srcs/server_conf.sh .
RUN chmod 755 server_conf.sh
CMD bash server_conf.sh


