### python-app
---
This simple project allows the integrations of Docker with an existing python application that uses a Postgres database.

Thanks to docker-compose it is possible to configure the services for communication with each other.

It also exposes the service on port 5000 to access application information.

* `app.py`: Contains the configuration of the web project, based in `Flask` and `pscopg`.
* `requirements.txt`: It has all the dependencies-libraries of my web project in python.
* `.dockerignore`/`.gitignore`: List of files and folders that will not be taken into account.
* `docker-compose.yml`: Configuration of services and containers for the operation of the application.
* `Dockerfile`: Definition of a Docker image with python to install the project libraries and be able to connect to the database.

**Run with:**

`docker compose up -d --build` 
And then check the `localhost:5000`