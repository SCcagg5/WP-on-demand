#!/bin/bash
domain="${1//.}"
name=$2

cp -r /srv/www/$1 ./src/$name
