FROM nginx:latest

COPY site.conf /etc/nginx/conf.d/default.conf

RUN apt-get update \
    && apt-get install -y software-properties-common \
    && add-apt-repository -y ppa:certbot/certbot \
    && apt-get update \
    && apt-get install -y python-certbot-nginx
