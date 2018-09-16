# Docker LAMP

This is a minimal configuration to allow quick and basic PHP development within Docker. The compose file includes:

- [PHP](https://hub.docker.com/_/php/)
- [MariaDB](https://hub.docker.com/_/mariadb/)
- [PHPMyAdmin](https://hub.docker.com/r/phpmyadmin/phpmyadmin/)
- [Adminer](https://hub.docker.com/_/adminer/)
- [Nginx Proxy](https://hub.docker.com/r/jwilder/nginx-proxy/)

I've configured it to have *data persistency*: this means that you can destroy the containers and bring them up again without losing your data in MariaDB.

## How to run

Clone the repo and run
```
docker-compose up -d
```
If you are on Windows, you need to add `COMPOSE_CONVERT_WINDOWS_PATHS=1` to your environment variables, otherwise the socket binding in the Nginx Proxy container will fail.

## Code example

There's a `test` db with a table and a couple of rows in it, and a very basic `index.php` with an SQL query that shows a couple of my favourite books. Of course you don't need to keep this data as it only serves as an example, but I strongly recommend you to read those books. :)
