# Restaurant API Laravel

Full stack project made using Laravel for creating REST API resources stored in MySQL database and React JS for frontend part - UI.

# Tools required

* PHP
* XAMMP
* COMPOSER
* MySQL Workbench.
* VSCode (recommended).

# How to launch the app

1. Clone repository to `xampp/htdocs` folder.
2. Open the project using VSCode or other prefered code editor.
3. Copy the file `.env.example` and rename it to `.env`.
4. Open MySQL Workbench and create new schema named `restaurant_api`.
   - > DB connection name is `mysql`. Change the name on line 11. if needed.   
5. Open `.env` file and add DB name `restaurant_api` on line 14.
   - > `DB_DATABASE=restaurant_api`
6. Open GitBash terminal and run command `php composer require php-open-source-saver/jwt-auth`.
   - > You may need to provide your `composer.phar` file directory in the command.
7. Run command `php artisan vendor:publish --provider="PHPOpenSourceSaver\JWTAuth\Providers\LaravelServiceProvider"`.
8. Run command `php artisan jwt:secret`.
9. Run command `php artisan migrate`.
10. Run command `php artisan db:seed --class=AdminSeeder`.
11. Run command `php artisan db:seed --class=RestaurantSeeder`.
12. Run command `php artisan db:seed --class=DishSeeder`.
13. Open XAMMP and start Apache and MySQL servers.
14. Run command `php artisan serve`.
15. Finaly, you can continue by starting frontend part of this [project](https://github.com/zgs3/restaurantReact).

## Authors

Project made by me - Žygimantas Kairaitis. 

Find me on [LinkedIn](https://www.linkedin.com/in/%C5%BEygimantas-kairaitis-018a86193/).
