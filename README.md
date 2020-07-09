# CarRental3-Laravel

# Introduction
The purpose of the application is to allow Car Rental businesses to make reservation process for their customers. This application is based on Laravel and MySQL. UI is powered by Bootstrap.

# Backend - Laravel
## Routes
List of routes used by this application with limited access and grants.
 -User Group : User 

- User Group: Administrator
  - /admin
  - /admin/dashboard - View for dashboard  

- Access: Public
  - / - View home page  
  - /contactus - View to display contact form
  - /aboutus - View to display about us information 
  - /register - View to display registration form
  - /login - View to display login form
 
  - /cars - View to display cars
  - /cars/{id} - View to display car with details
  
## Controllers
Controllers used by this application.
- ContactfromController - returns public contact from view and save data
- CarsController - returns public cars/car View
- HomeController - returns public Views
- Admin Controller - returns Views accessible only by Administrator

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
For the better UI, this app uses Bootstrap CSS framework

