FROM himanshudas75/python-cron:v4
RUN mkdir /app
WORKDIR /app
COPY ./src /app
COPY ./cron /root/cron
RUN echo '*/15 * * * * root python /root/cron/cron.py' >> /etc/crontab
RUN useradd py-app
RUN chmod -R 755 /app
RUN chmod -R 640 /root/cron
EXPOSE 5000
# CMD ["bash", "/root/cron/sleeper.sh"]

CMD python /root/cron/cron.py && service cron start && sudo -u py-app python /app/services/app.py