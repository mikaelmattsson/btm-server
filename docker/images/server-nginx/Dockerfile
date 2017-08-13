FROM nginx:latest

COPY site.conf /etc/nginx/conf.d/default.conf

    docker-compose exec server-nginx apt-get update
    docker-compose exec server-nginx apt-get install -y software-properties-common
    docker-compose exec server-nginx add-apt-repository -y ppa:certbot/certbot
    docker-compose exec server-nginx apt-get update
    docker-compose exec server-nginx apt-get install -y python-certbot-nginx
