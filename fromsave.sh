#!/bin/bash
domain="${1//.}"
login=$2
email=$3
save=$4 #must contain /db_data && /html

if [ -d "~/$domain" ]
then
  exit 1
fi
cp ~/sources_wp_multi/project/base_wp/ ~/$domain -r
cp ~/$domain/sample.env ~/$domain/.env
echo "VIRTUAL_HOST=$1\nDB_CONTAINER=db_$domain\nWP_CONTAINER=wp_$domain" >> ~/$domain/.env
cd ~/$domain
cp -R $save /srv/www/$domain/html
docker-compose up -d
chown www-data plugin/ -R
chown www-data theme/ -R
chown www-data /srv/www/$domain/html -R
docker exec wp_$domain curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
docker exec wp_$domain chmod +x wp-cli.phar
docker exec wp_$domain mv wp-cli.phar /usr/local/bin/wp-cli
docker exec wp_$domain wp-cli --allow-root user create $login $email --role=administrator --user_pass=1q2W3e4R
docker exec wp_$domain wp-cli option update home "http://$1"
docker exec wp_$domain wp-cli option update siteurl "http://$1"
echo "php_value memory_limit 300M\nphp_value post_max_size 300M\nphp_value upload_max_filesize 300M" >> /srv/www/$domain/html/.htaccess
cd -
exit 0
