# README.md

This Laravel project can be run as a Docker image using the following command:

```bash
docker compose up -d --build
```

Once the containers are running, the migrations will need to be applied run the command:

```bash
docker compose exec laravel_app php artisan migrate
docker compose exec laravel_app chown -R www-data:www-data /var/www/html/database/
```

Hit Yes if the database is not created yet

After the migrations have ran the application can be found at:
http://localhost:8080/
