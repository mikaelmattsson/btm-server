FROM nginx:latest

RUN apt-get update \
    && apt-get install -y software-properties-common \
    #&& add-apt-repository -y ppa:certbot/certbot \
    && apt-get update \
    && apt-get install -y python-certbot-nginx

VOLUME /etc/nginx/certs/

RUN openssl req -new -newkey rsa:4096 -days 365 -nodes -x509 \
        -subj "/C=US/ST=Denial/L=Springfield/O=Dis/CN=battlemagetraining.com" \
        -keyout /etc/nginx/certs/battlemagetraining.com.key  -out /etc/nginx/certs/battlemagetraining.com.cert

COPY site.conf /etc/nginx/conf.d/default.conf
