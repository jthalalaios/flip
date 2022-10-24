#Flip - project

First of all you have to install docker: https://docs.docker.com/engine/install/ubuntu/  (if you dont have full access please use the commands below with sudo)

Docker stack:

1) Create network: go to location: flip/flip-stack with the following command: docker network create flip-network
2) Create image but first you have to be on flip/flip-stack/flip-api to run so docker finds the Dockerfile with the following command: docker build -t flip-api-image .  (the command requires on the end the dot ".")
3) Build the image: go back to location: flip/flip-stack with the following command:  docker-compose build --no-cache
4) Up the containers be on same location: flip/flip-stack with the following command: docker-compose up -d


After docker's containers are up:

1) Go inside flip-project container with the following command: docker exec -it flip-api bash
2) In case that key is not on .env inside laravel's folder use the command: php artisan key:generate (to set the the APP_KEY value in your .env)
3) Run composer's installation: composer install
4) Run migration: php artisan migrate

After everything is done, the url link is: http://127.0.0.1:9001/flip-user or localhost:9001/flip-user
