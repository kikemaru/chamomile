#!/bin/bash

if [ $# -ne 2 ]; then
  echo "Usage: $0 <ip_address> <proxy_address>"
  exit 1
fi

ip_address=$1
proxy_address=$2
file_path="./_docker/nginx/conf.d/nginx.conf"

awk -v ip="$ip_address" 'NR==17 {$0="allow " ip ";"} 1' "$file_path" > temp && mv temp "$file_path"
awk -v proxy="$proxy_address" 'NR==19 {$0="proxy_pass " proxy ";"} 1' "$file_path" > temp && mv temp "$file_path"