#!/bin/bash
sleep 70
python /root/cron/cron.py
sudo -u py-app python /app/services/app.py