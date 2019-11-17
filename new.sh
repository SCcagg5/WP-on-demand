#!/bin/bash
domain="${1//.}"
if [ -d "~/$domain" ]
then
  exit 1
fi
cp ~/sources_wp_multi/project/base_wp/ ~/$domain -r
cp ~/$domain/sample.env ~/$domain/.env
echo "VIRTUAL_HOST=$domain\nDB_CONTAINER=db_$domain\nWP_CONTAINER=wp_$domain" >> ~/$domain/.env
cd ~/$domain
docker-compose up -d
chown www-data plugin/ -R
chown www-data theme/ -R
chown www-data /srv/www/$domain/html -R
docker exec wp_$domain curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
docker exec wp_$domain chmod +x wp-cli.phar
docker exec wp_$domain mv wp-cli.phar /usr/local/bin/wp-cli
echo "php_value memory_limit 300M\nphp_value post_max_size 300M\nphp_value upload_max_filesize 300M" >> /srv/www/$domain/html/.htaccess
cd -
exit 0
