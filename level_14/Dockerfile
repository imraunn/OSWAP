FROM himanshudas75/php-apache-mysql-cron:v2
WORKDIR /var/www/html
COPY ./cron /root/cron
COPY ./src .
RUN chmod 640 /root/cron/cron.php
RUN echo '*/15 * * * * root php /root/cron/cron.php' >> /etc/crontab
EXPOSE 80
CMD chown -R root:root /var/www/html && chmod -R 755 /var/www/html && php /root/cron/cron.php && service cron start && apachectl restart && tail -f /dev/null