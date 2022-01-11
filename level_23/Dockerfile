FROM himanshudas75/php-apache-mysql-cron:v2 as chall
WORKDIR /var/www/html
COPY ./cron /root/cron
COPY ./src .
RUN chmod 640 /root/cron/cron.php
RUN echo '*/15 * * * * root php /root/cron/cron.php' >> /etc/crontab
EXPOSE 80
CMD php /root/cron/cron.php && service cron start && apachectl restart && tail -f /dev/null

FROM mysql as db
WORKDIR /docker-entrypoint-initdb.d
COPY ./db .
ENV MYSQL_ROOT_PASSWORD r00t_p@$$w0rd
ENV MYSQL_DATABASE members
ENV MYSQL_USER cyber
ENV MYSQL_PASSWORD cyberishere
EXPOSE 3306