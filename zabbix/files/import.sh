#!/bin/bash



	 sleep 10s
 
	 mysql -uroot -D zabbix -p"mypassword" < "/home/schema.sql"
	 mysql -uroot -D zabbix -p"mypassword" < "/home/images.sql"
	 mysql -uroot -D zabbix -p"mypassword" < "/home/data.sql"
	 mysql -uroot -p"mypassword" -e "INSERT INTO mysql.user (Host,User,Password) VALUES('localhost','zabbix',PASSWORD('zabbix'));"

mysqld_safe
