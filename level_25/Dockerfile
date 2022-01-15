FROM alpine
RUN apk update
RUN apk add nodejs npm php8 php8-mysqli
WORKDIR /usr/app
COPY ./cron /root
RUN chmod 640 /root/cron.php
RUN echo '*/15 * * * * php8 /root/cron.php && cd /usr/app && node push.js' >> /etc/crontabs/root
COPY package*.json ./
RUN npm install
COPY ./src .
EXPOSE 4000
CMD php8 /root/cron.php && npm run seed && crond -b  && npm run start
