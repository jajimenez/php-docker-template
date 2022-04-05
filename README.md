# PHP Docker Template

This project is a template for running a PHP web application with Docker. This template sets up:

- An Apache and PHP container running the application files inside the `src` directory
- A MariaDB container
- A PhpMyAdmin container

Version: 0.1.0

## How to run

Inside the project directory, run the following command:

```bash
docker compose up
```

Or the next one instead if you want to run the containers in the background:

```bash
docker compose up -d
```

The application will be available in:

```
http://localhost:8080
```

And PhpMyAdmin will be available in:

```
http://localhost:8081
```
