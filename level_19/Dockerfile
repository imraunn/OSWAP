FROM alpine
RUN apk update
RUN apk add apache2 php8 php8-apache2 php8-mysqli php8-exif
RUN rm /var/www/localhost/htdocs/*
COPY ./src /var/www/localhost/htdocs
COPY ./cron /root
RUN chmod 640 /root/cron.php
RUN chown apache:apache /var/www/localhost/htdocs/images
RUN sed -i 's/php$>/(?i:php)$>/g' /etc/apache2/conf.d/php8-module.conf
RUN echo '*/5 * * * * rm /var/www/localhost/htdocs/images/*' >> /etc/crontabs/root
RUN echo '*/15 * * * * php8 /root/cron.php' >> /etc/crontabs/root
EXPOSE 80
CMD php8 /root/cron.php && crond -b && exec /usr/sbin/httpd -D FOREGROUND
