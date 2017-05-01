#!/bin/sh 
## EC CUBE set permission
# sudo chown -R apache:apache /var/www/html/eccube3
# sudo chmod -R 775 /var/www/html/eccube3
#
sudo chmod -R go+w "./html"
sudo chmod go+w "./app"
sudo chmod -R go+w "./app/template"
sudo chmod -R go+w "./app/cache"
sudo chmod -R go+w "./app/config"
sudo chmod -R go+w "./app/download"
sudo chmod -R go+w "./app/downloads"
sudo chmod go+w "./app/font"
sudo chmod go+w "./app/fonts"
sudo chmod go+w "./app/log"
sudo chmod go+w "./app/logs"
sudo chmod go+w "./app/upload"
sudo chmod go+w "./app/upload/csv"