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




Reservations
Quotes
Payments
Calendar
Vehicles
Maintenance
Repair orders
Customers
Agreements
Reports
Notifications


Reservations
* You will be redirected from the corresponding element in the main menu to the Reservation page. At the top of the page, you can see the search form used to find a reservation. The quick filter buttons can be used to show only Today/Tomorrow pick-ups and drop-offs. By pressing plus sign, you can add a new reservation. More detailed information is presented in a well-structured table. The table contains the following columns:
- id 
- Customer
- Phone number
- Pick-up date
- Drop-off date
- Car Type
- Car
- Total
- Total days
- Status (Completed, Open, Rental, Cancelled)
- Notes
- Actions (bin icon, pencil icon)

With Reservation page, you can manage the car rental processes automatically and productively. By entering the Reservation page, you get all the booking information at any time in one click.
# Quotes
* Getting a quote as fast as possible is a vital option for customers to rent and make a payment. It’s not a secret that a car make and a car model have implications on the cost of a vehicle and its quote. That’s why any customer can get an immediate quote based on the car make and model he/she chose, and then make a decision to rent it or not. 
- id 
- Customer name (First/Last)
- Customer e-mail
- Pick-up date
- Drop-off date
- Vehicle class (economy, comfort, premium)
- Total Price
- Status (Started, E-mail sent)
# Payments
* Paying for things online is too important for customers in today’s digital world. That’s why offering sophisticated payment options allows you to make the payment process as fast and easy as possible. You can reach the Payments page from the corresponding option in your main menu. Here you can find the following information:
- id
- Customer Name
- Customer E-mail
- Amount
- Payment type (Credit Card)
- Date
- Status

# Calendar
With the Calendar option, you can see all the reservations you have on your agenda. When a user makes a reservation, it is automatically created in your calendar. You can reach the Calendar page by pressing the exact same option on the main menu. At the top, you can find the search form that saves you time if you are looking for the car model. Also, you can find timeline buttons - week, month, 3 months, 6 months, year. If you place your mouse over any field in the table, a little bubble appears to display more detail information about a car reservation. That means you don’t need just to look at a pick-up and drop-off date, number of reservation days, etc.
* By clicking the colored object, you will be redirected to the detailed information:
- Rental information
- Charge information
- Vehicle information
- Renter information

# Vehicles
With the Vehicles option, you can easily browse the vehicles you have in your fleet. Whether the car is on rent, under repair or available, all that information is shown in the well-structures table. By selecting the Vehicle menu option, you will be redirected to the Vehicle page. It is comprised of 5 essential tabs such as:

- All
- Available
- Dirty
- On rent
- Under repair

# Maintenance
If you are in a rental business, you shouldn’t ignore preventive maintenance. With that option, you will be always aware of regular maintenance that can help you to increase the lifespan of your vehicles, keep your renters happy and save money on repairs in the future. On the Maintenance page, you will find information and see a number of maintenance-related procedures that should only be handled or in the process now.
 - status colors 

# Repair orders
You can find the Repair orders page in the corresponding option in your main menu. This option is very useful and comes into play if you want to keep abreast of any issue happened to your fleet. All the information about repair orders is presented in the table. Here you can find the following columns:

- Vehicle #
- Due
- Scheduled
- Started
- Status
- Progress
- Total Cost

# Customers
All the customers you can see on the Customers page. Once you press the corresponding option in your main menu, you are redirected to that page. Thanks to the Customers page, you always keep abreast of how many users are using your service. Not only can this feature help you to store information about all users, but also it helps you to make data-driven decisions.
# Agreements
Dealing with agreements is a part of running a rental business. You will have a number of business relationships involving some type of contractual commitment or obligation. With the help of that feature, you can find all the agreements signed with users. They can be automatically saved as secure PDFs or easily downloaded, shared with all involved parties, or printed for future reference.
# Reports
With a flexible and sophisticated reporting option, you can professionally manage and optimize your business processes, reduce expenses, and manage risk and compliance. You can reach that page from the corresponding option in your main menu. As your business grows, you would have a rapidly expanding customer base that should be managed more effectively. With the Reports option, you can sharpen decision-making and compete in a highly unpredictable business environment.
# Notifications
With the Notifications feature, you can provide the user with reminders, or other timely and helpful information about your rental services so that users take action directly from the notification. This feature is essential if you want to maintain the connectivity with the users. Whether you want to notify users about an expired rental period or some opportunities for standing customers, this feature is a good choice.
# Administrator Dashboard
On the Administrator Dashboard, you can see the widgets that are specific areas of your dashboard:

- Overdue
- Today’s drop offs
- Today’s pick-ups
- Pending payment
- On repair
- Opened agreements
With the help of the widgets, you can view or perform specific actions in the car rental system more fast and easy. Your main menu allows you to reach essential areas of the car reservation system. The main menu includes:

- Reservations
- Rates
- Transactions
- Calendar
- Vehicles
- Maintenance
- Repair orders
- Users
- Agreements
- Statistics
- Settings

# Reservations
It’s an excellent feature that allows you to be aware of all the reservations happened within the platform. All the information is well-structured and presented in an easy to read format that speeds up the process of familiarization with reservation data and saves time and resources when making business decisions.

# Rates
You can easily find the Rates page in your main menu. With rates feature, you can easily set a price for your cars. Based on that data, all the calculations are proceeding.

- Base rate
- Fuel Charges
- Equipment and services
- Collision damage waiver
- Road tax
- Vehicle rental tax
- Discounts and coupons
- Breakdown assistance
# Users
In the corresponding option from the main menu, you can find the information about the users. Whether it is a renter or a manager, all information is displayed in the table. Here you can see the following columns:

- id 
- Name
- Role (renter/manager)
- E-mail
- Phone number
- Actions
Also, you can edit, add, update or delete any information presented in the table in one click. That collected data can be used for various marketing strategies. Not only can you learn more about your users, but also you can make wise data-driven decisions.
# Statistics
Being the most powerful feature of the system, statistics provides great opportunities to keep abreast of how profitable and successful your business is. On the Statistics page, you can see a wide number of dashboards:

- Sales Status
- Vehicle Status
- Rates Overview
- Customer Satisfaction Overview
- Rental Management

As a result, you can easily retrieve a summary of your sales, always know exactly what is happening to your fleet - what is under repair, rented or on sale, to measure of how your rental services meet customers' want and needs.

# Settings
Directly from the main menu, you can reach the Settings page. You can make some changes within the reservation system. On the Settings page of the car reservation system, you’ll find the following widgets:

- General Settings
- Email Settings
- Notifications Settings
- Integrations
- Security Settings
