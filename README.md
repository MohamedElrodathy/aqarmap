Installation
git clone https://github.com/MohamedElrodathy/aqarmap.git
cd aqarmap
composer install
create .env file copy it from .env.example and change  database info 
php artisan key:generate

//create database migrate

php artisan migrate

create db seeder for user to create admin account 

php artisan db:seed

then you can run app using php artisan serve 

and login data 

email :m.elrodathy@yhaoo.com
password:password

then you log as admin 
if you need to show visitor you can register new user

