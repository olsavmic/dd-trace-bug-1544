#!/usr/bin/env sh

echo "Generating config file..."
envsubst '${FCGI_HOST} ${FCGI_PORT} ${FCGI_INDEX} ${ROOT_DIR}' < /etc/nginx/nginx.conf.template > /etc/nginx/nginx.conf
echo "OK"

exec "$@"
