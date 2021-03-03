# CarRental3-Laravel

# Introduction
The purpose of the application is to allow Car Rental businesses to make reservation process for their customers. This application is based on Laravel and MySQL. UI is powered by Bootstrap.

# Installation Docker 
<a href="https://github.com/jguyomard/docker-laravel"> jguyomard/docker-laravel</a>
Install docker and docker-compose ;

Copy docker-compose.yml file to your project root path, and edit it according to your needs ;

From your project directory, start up your application by running:

docker-compose up
If you want, you can run composer or artisan through docker. For instance:
docker-compose exec php composer install
docker-compose exec php php artisan migrate
docker-compose exec php $yourCommandHere
Docker Images
These docker images are configured in docker-compose.yml file. You can comment or uncomment some services according to your project.

jguyomard/laravel-php:7.3 (this docker image extends php:7.3-fpm-alpine to add some PHP extensions) ;
jguyomard/laravel-nginx:1.13 (this docker image extends nginx:1.13-alpine to add Laravel vhost) ;
mysql:5.7 ;

cp .env.example .env
php artisan key:generate

# Backend - Laravel
## Routes
List of routes used by this application with limited access and grants.
 -User Group : User 

- User Group: Administrator
  - /admin
  - /admin/dashboard - View for dashboard  
  - /admin/users - View for Users management Edit/delete/create/ multi-deletion
  - /admin/cars - View for Cars management Edit/delete/create/ multi-deletion

- Access: Public
  - / - View home page  
  - /contactus - View to display contact form
  - /aboutus - View to display about us information 
  - /register - View to display registration form
  - /login - View to display login form
 
  - /cars - View to display cars
  - /cars/{id} - View to display car with details
  - /rent

## Controllers
Controllers used by this application.
- CarsController - returns public cars/car View
- CarsManageController
- ContactfromController - returns public contact from view and save data
- DashboardController
- HomeController - returns public Views
- Rent Controller
- UsersManageController


- AdminMiddleware - Checks if user is admin 
## Views
Views used by this application.
- /admin 
    - dashboard - dashboard home page View 
    - vehiclemanagement - Cars management View
- /auth
    - passwords
    - login page View
    - register page View
- /layouts
  - app - admin page parent view
  -layout - public page parent view
- /user
    -
- aboutus - About us page View
- car - Single car page View
- cars - Cars page View
- contact - Contact page View
- home - Login welcome  Page View
- welcome - Home page View

## Authentication
Laravel Default Auth.

# Database
Database management system used by this app is MySQL.
- Tables
    - user table
    - cars table
    - contact_us table
-seeds
    - cars
    - users

# FrontEnd
## Bootstrap
For better UI, this app uses Bootstrap CSS framework
