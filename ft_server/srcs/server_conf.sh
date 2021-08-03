#!/bin/bash

service mysql restart
service php7.3-fpm start
service nginx start

mysql -u root --skip-password -e "CREATE DATABASE ft_server_wp;"
mysql -u root --skip-password -e "CREATE USER troxanna@localhost IDENTIFIED BY 'troxanna';"
mysql -u root --skip-password -e "GRANT ALL PRIVILEGES ON ft_server_wp.* TO 'troxanna'@'localhost' IDENTIFIED BY 'troxanna' WITH GRANT OPTION; FLUSH PRIVILEGES;"

bash
