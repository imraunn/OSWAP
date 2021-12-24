import mysql.connector

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

mydb=connect_db()
flag=get_flag(mydb)
write_to_file(flag)