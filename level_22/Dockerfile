FROM himanshudas75/python-cron:v4
RUN mkdir /app
WORKDIR /app
COPY ./src /app
COPY ./cron /root/cron
RUN echo '*/1 * * * * root sleep 2 && python /root/cron/cron.py' >> /etc/crontab
RUN useradd py-app
RUN chmod -R 755 /app
RUN chmod -R 640 /root/cron
RUN service cron start
EXPOSE 5000
CMD ["bash", "/root/cron/sleeper.sh"]