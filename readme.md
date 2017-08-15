
# Game high score server

## Installation

    openssl req -new -newkey rsa:4096 -days 365 -nodes -x509 \
            -subj "/C=US/ST=Denial/L=Springfield/O=Dis/CN=battlemagetraining.com" \
            -keyout ./data/letsencrypt/live/battlemagetraining.com/fullchain.pem \
            -out ./data/letsencrypt/live/battlemagetraining.com/privkey.pem

    bin/install
    bin/composer install
    bin/artisan key:generate

## SSL

    docker-compose exec server-nginx certbot --nginx
    docker-compose exec server-nginx certbot renew
