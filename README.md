### Docker-Compose Setup
- Clone this repo
- Make sure you have docker-compose installed on your machine
- Change directory into the root of the folder of the cloned directory, i.e ``` cd foldername ```
- Rename the .env.example file to .env
- Set ``` DB_HOST=db``` in your .env file, ``` db ``` is the service name for mysql specidied in the docker-compose file.
- Set ``` MYSQL_ROOT_PASSWORD=yourpassword ``` also in your .env file.
- Run ``` docker-compose build ``` to build an image of the app.
- Run ``` docker-compose up -d ``` to start up the container
- Set all necessary environment variables in the .env file
- Set your other Database credentials
- After successful build, run ``` docker exec -u 0 -it nextdaysite_app_1 bash ``` to run interactive commands in the php app service.
- Run ``` composer install ```. Alternatively, you can run ``` composer install --ignore-platform-reqs ```
- Run ``` php artisan key:generate ```
- Run ``` php artisan config:cache ```
- Run ``` php artisan migrate ```
- Run ``` php artisan db:seed ```
- Visit ``` http://localhost:8000 ``` on a browser
- To run tests ``` php artisan test```

### Local Setup
- Clone this repo
- Change directory into the root of the folder of the cloned directory, i.e ``` cd foldername ```
- Create a database in mysql and update the .env details accordingly
- Rename the .env.example file to .env
- Set all your environment variables in the .env file
- Run ``` composer install ```
- Run ``` php artisan key:generate ```
- Run ``` php artisan config:cache ```
- Run ``` php artisan serve ```
- Run ``` php artisan migrate ```
- Run ``` php artisan db:seed ```
- Run ``` php artisan serve ```
- Visit ``` http://localhost:8000 ``` on a browser
- To run tests ``` php artisan test```

