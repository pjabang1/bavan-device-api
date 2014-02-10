bavan-device-api
================


#Start up scripts

sudo service redis_6379 start

# programs
/root/programs

# supervisor confs
/etc/supervisor/

#firewall
sudo ufw enable

# Allow requests

iptables -I INPUT -p tcp -m tcp --dport 8080 -j ACCEPT

sudo ufw allow 8080

#killing processes
ps aux | grep php
