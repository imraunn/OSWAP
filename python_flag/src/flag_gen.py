import hashlib
import time
import numpy as np
import mysql.connector
import os
import sys

infra=sys.argv[1].lower()

if not infra=="oswap" and not infra=="unixit":
    exit(97)

def gen_flag():
    flags=[]
    seed=round(time.time())
    np.random.seed(seed)

    for _ in range(26):
        x=np.random.bytes(16)
        salt=b"cyberlabs"
        hashed=hashlib.md5(x+salt).hexdigest()
        flag=infra+"{"+hashed+"}"
        flags.append(flag)
    
    return flags

def connect_db():
    HOSTNAME="rovolang.ml"
    USER="cyberlabs"
    PASSWORD="CYB3RL4BS_!!FLAgs!"
    DATABASE="flag_storage"

    mydb=mysql.connector.connect(
        host=HOSTNAME,
        user=USER,
        password=PASSWORD,
        database=DATABASE
    )

    return mydb

def update_db(mydb, flags):
    for j, i in enumerate(flags):
        mycursor=mydb.cursor()
        query=f"UPDATE {infra} SET flag='{i}' WHERE chall={j}"
        mycursor.execute(query)
    mydb.commit()
    return mydb

flags=gen_flag()
while(True):
    try:
        mydb=connect_db()
        break
    except:
        time.sleep(5)
        continue
mydb=update_db(mydb, flags)