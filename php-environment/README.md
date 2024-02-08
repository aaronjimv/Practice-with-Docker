### php-environment
---
Thanks to Docker we can create a development environment similar to XAMPP to develop PHP applications without downloading or installing any additional programs.

It also allows you to easily create a database to persist the information of the applications created.

The information will be exposed to a service on port 80 in order to access the information in the PHP files.

* `index.php`: file to display information and connect to a database.
* `docker-compose.yml`: Configuration of services and containers for application development.
* `Dockerfile`: Definition of a Docker image with PHP and its extensions to connect to the database.

**Run with:**

- `docker compose up -d --build`
- And then check the `localhost`
