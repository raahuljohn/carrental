# carrental
This is a Car Rental Website created using Web Development Tools which consists of basic fuctions of 
booking a Car on a particular date. It also has an Administrator Login which displays all the cars that
were booked. It consists of variety of cars to choose from under 3 type, HatchBack, Sedan and SUV.

## Getting Started
These Instructions will help you to get a copy of the project and also to run it on your Local Machine.

## Technologies Used
* HTML
* PHP
* CSS
* JAVASCRIPT
* JQUERY
* MYSQL

### Prerequisties
These are the Softwares you need to install to be able to run this Project on your Local Machine.

* XAMPP Controller - To run .php files
* SQLyog - To be able to control the Database

### How to Run
#### Setting up Database
* Open the SQLyog and in the Query Section type this command to create a Database.
```
CREATE DATABASE `one`;
```
* Now, To Create a login Table, Type this code into the query section.
```
CREATE TABLE `login` (
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `login` (user,pass) values ('admin','admin');
```
NOTE THAT THE LOGIN TABLE HAS admin AS THE LOGIN ID AND PASSWORD

* To Create a rent Table,
```
CREATE TABLE `rent` (
  `name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `datefrom` varchar(255) DEFAULT NULL,
  `dateto` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```
* Now both the tables have been created.

#### Setting up XAMPP
* You can download the Project Files (ZIP) this [link](https://github.com/raahuljohn/carrental.git)
* Extract the contents of the ZIP file to the htdocs folder inside the directory where your XAMPP Controller is Installed. 

 Eg:

```
R:\XAMPP\htdocs
```

* Open XAMPP Controller and Click on START action from APACHE and MYSQL Module.
* Open your Web Browser , Then type this in the search bar.

```
http://localhost/rentals/index.php
```

* This will take you to the Index page of the Website. 

You can access all the functions and book a Rental Car, To see all the Bookings you can LOGIN as Administrator
and view it.

## Built With
* [MATERIALIZE CSS](https://materializecss.com/getting-started.html)
* [XAMPP CONTROLLER](https://www.apachefriends.org/download.html)
* [SQLyog](https://www.webyog.com/product/sqlyog)
* [VISUAL CODE](https://code.visualstudio.com/download)

## Authors
** R RAAHUL JOHN**
