#!/bin/bash
echo "IM INSIDE SLEEPER.SH"
python /root/cron/cron.py
echo "CRON DONE"
sudo -u py-app python /app/services/app.py