#!/usr/bin/python3

import mairadb
import sys

conn = mariadb.connect(
        user="gnuboard",
        password="1488",
        host="localhost",
        port="3306",
        database="gnuboard" )

cur = conn.cursor()

strQuery="select * from user"

cur.execute( strQuery )

result = cur.fetchall()

print ('print result')

for id, name in result:
    print(f"id: {id}, name:{name}")


conn.close()

