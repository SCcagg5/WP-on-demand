#!/bin/bash
apt-get install curl git -y > /dev/null
git clone https://github.com/SCcagg5/Multi-Wordpress ~/sources_wp_multi > /dev/null
curl https://get.docker.com/ -o docker.sh > /dev/null
bash docker.sh > /dev/null
rm docker.sh > /dev/null
apt-get install docker-compose -y > /dev/null
cp ~/sources_wp_multi/project/nginx ~/nginx -r
cd ~/nginx
docker-compose up -d
cd -
