### Docker-Compose Setup
- Clone this repo
- Make sure you have docker-compose installed on your machine
- Change Directory into the root of the folder ``` cd foldername ```
- Rename the .env.example file to .env
- Set all necessary environment variables in the .env file
- set ``` DB_HOST=db``` in your .env file
- set your other Database credentials
- Run ``` docker-compose build ```
- After successful build, run ``` docker exec -u 0 -it nextdaysite_app_1 bash ``` to run interactive commands
- Run ``` php artisan key:generate ```
- Run ``` php artisan config:cache ```
- Run ``` php artisan migrate ```
- Run ``` php artisan db:seed ```
- Visit ``` http://localhost:8000 ``` on a browser
- To run tests ``` php artisan test```

### Local Setup
- Clone this repo
- Make sure you have docker-compose installed on your machine
- Change Directory into the root of the folder ``` cd foldername ```
- Create a database in mysql and update the .env details accordingly
- Rename the .env.example file to .env
- Set all your environment variables in the .env file
- - Run ``` php artisan key:generate ```
- Run ``` php artisan config:cache ```
- Run ``` php artisan serve ```
- Run ``` php artisan migrate ```
- Run ``` php artisan db:seed ```
- Visit ``` http://localhost:8000 ``` on a browser
- To run tests ``` php artisan test```

