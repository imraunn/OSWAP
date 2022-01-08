#!/bin/bash
echo "IM INSIDE SLEEPER.SH"
python /root/cron/cron.py
service cron start
echo "CRON DONE"
sudo -u py-app python /app/services/app.py