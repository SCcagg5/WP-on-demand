#!/bin/bash
domain="${1//.}"

cd ~/$domain
docker-compose down
cd -
rm -rf /srv/www/$1
rm -rf ~/$domain
