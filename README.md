# OSWAP

## A dockerized-repository containing challenges made with :heart: by
- [@himanshudas75](https://github.com/himanshudas75)
- [@imraunn](https://github.com/imraunn)
- [@sudoshreyansh](https://github.com/sudoshreyansh)

## Features:
- Beginner-friendly CTF (Capture the Flag) like web challenges
- Dynamic flag system
- Challenges ranging from 
    - Basic web (robots.txt, sitemap.xml, directory listing), Cookies, Headers
    - Reversing PHP, Obfuscated JS, XOR
    - Type Juggling, XXE, LFI, IDOR
    - Shell Upload (vanilla, filter extensions, filter magic bytes)
    - Command Injections (vanilla, filtered)
    - Login SQLi, Union SQLi, Blind SQLi
    - SSTI, NoSQLi, JWT
    
## Dynamic Flags:
1) The flags are created by a dockerized python-instance
2) Created flags are stored in a dockerized MySQL database
3) The python-instance runs a cronjob that updates the flag after a fixed interval
4) All the dockerized-containers have a cronjob to fetch the flag from the database
5) /root/cron/cron.php updates the flag in their respective docker instances

The docker-compose.yml manages all the instances, cronjobs, ports

## Tech Stack:
- Docker
- HTML5
- CSS3
- PHP7
- MySQL
- Flask and Jinja
- Python 3.9
- NodeJS

## Installation steps:

```bash 
git clone https://github.com/imraunn/OSWAP
```
```bash
cd OSWAP
```
```bash
docker-compose up --build
```

## Cleanup Script:
```bash
bash clean_container.sh
```


This project was done as an endeavour by Infosec CyberLabs 2024 under the mentorship of :fire: [@Masrt200](https://github.com/masrt200/) and [@naughtyboy191](https://github.com/naughtyboy191)