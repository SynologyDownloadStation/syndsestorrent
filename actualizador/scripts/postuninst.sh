#!/bin/sh

sed -n '/syndsestorrent_actualizador.php/!p' /etc/crontab > /etc/crontab.new
mv /etc/crontab.new /etc/crontab