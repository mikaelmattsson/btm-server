
# Game high score server

## Installation

    bin/install
    bin/composer install
    bin/artisan key:generate

## SSL
    
    docker-compose exec server-nginx certbot --nginx
    docker-compose exec server-nginx certbot renew
    