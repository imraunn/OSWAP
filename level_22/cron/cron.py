import mysql.connector
import time

CHALL_NO = 22

def connect_db():
    HOSTNAME="db_flag"
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

def get_flag(mydb):
    mycursor=mydb.cursor()
    query=f"SELECT flag FROM oswap WHERE chall={CHALL_NO}"
    mycursor.execute(query)
    flag=mycursor.fetchone()
    return flag[0]

def write_to_file(flag):
    f=open("/app/flag.txt","w")
    f.write(flag)
    f.close()

while(True):
    try:
        mydb=connect_db()
        break
    except:
        time.sleep(5)
        continue

flag=""

while(True):
    flag=get_flag(mydb)
    if not flag=="":
        write_to_file(flag)
        break
    else:
        time.sleep(5)