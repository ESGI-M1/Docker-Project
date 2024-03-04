# Welcome to Todo List

## Setup

1. Clone the repository
2. Create the docker network `docker network create dockerProject` 
3. In command line, go to each folder in /Docker (/Docker/bdd, /Docker/symfony) and run `docker-compose up`
4. Run `docker-compose exec symfony php bin/console d:d:c` in /Docker/symfony
5. Run `docker-compose exec symfony php bin/console d:s:u` in /Docker/symfony
6. Then go to /frontend and open in browser `http://localhost:8000/`
