FROM php:7.0-apache
COPY scripts/info.php /var/www/html/
COPY scripts/countlog.txt /var/www/html/
COPY scripts/counter.php /var/www/html/
RUN docker-php-ext-install -j$(nproc) mysqli
