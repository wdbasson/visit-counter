FROM php:7.0-apache
#RUN apt-get update
#RUN apt-get install -y php-mysqlnd
#RUN apt-get clean
RUN docker-php-ext-install -j$(nproc) mysqli
COPY scripts/info.php /var/www/html/
COPY scripts/countlog.txt /var/www/html/
COPY scripts/counter.php /var/www/html/
