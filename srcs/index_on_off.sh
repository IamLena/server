#!/bin/bash

if grep -q "autoindex on" /etc/nginx/sites-available/localhost
then
	sed -i 's/autoindex on/autoindex off/' /etc/nginx/sites-available/localhost
	echo "Autoindex is off"
	service nginx restart
elif grep -q "autoindex off" /etc/nginx/sites-available/localhost
then
	sed -i 's/autoindex off/autoindex on/' /etc/nginx/sites-available/localhost
	echo "Autoindex is on"
	service nginx restart
fi
