FROM nginx:1.10

ADD ./config/certs/server.crt /etc/nginx/certs/server.crt
ADD ./config/certs/server.pem /etc/nginx/certs/server.pem
ADD vhost.conf /etc/nginx/conf.d/default.conf