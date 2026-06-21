# Dog Daycare Management System

A full-stack PHP and MySQL web application developed for managing a dog daycare facility. The system provides administrative functionality for managing dogs, owners, veterinary records, kennel information, staff data, and inventory through a browser-based interface.

This project was developed as part of a Database Systems course and demonstrates relational database design, SQL development, CRUD operations, and server-side web application development.

---

## Project Overview

The Dog Daycare Management System was designed to centralize information related to a dog daycare business. The application allows administrators to manage customer information, pet records, health information, kennel assignments, and inventory from a single web interface.

The project combines:

* PHP
* MySQL / MariaDB
* HTML
* SQL
* Relational Database Design

to create a complete database-driven web application.

---

## Features

### Dog Management

* Register new dogs
* Deregister existing dogs
* View dog information
* Track breed, age, size, weight, and notes

### Owner Management

* Register dog owners
* View owner information
* Associate owners with pets
* Store contact information

### Veterinary Records

* View veterinarian information
* Associate dogs with veterinarians
* Track vaccination status
* Track spay/neuter status
* Record allergies and medical notes

### Kennel Management

* Monitor kennel occupancy
* Track boarding assignments

### Staff Management

* View staff information
* Maintain employee records

### Inventory Management

* Track daycare inventory
* Monitor quantities
* Store product information
* Support grooming, daycare, and training operations

---

## Skills Demonstrated

### Software Development

* Full-Stack Development
* Web Application Development
* CRUD Operations
* Server-Side Programming
* Configuration Management

### Database Engineering

* Relational Database Design
* SQL Development
* Data Modeling
* Primary Keys
* Foreign Key Relationships
* Query Development
* Data Management

### Technologies

* PHP
* MySQL
* MariaDB
* phpMyAdmin
* XAMPP
* HTML

---

## Database Design

The application uses multiple related tables to organize daycare information.

### Primary Tables

| Table         | Purpose                         |
| ------------- | ------------------------------- |
| dogs          | Stores dog information          |
| owners        | Stores owner information        |
| health_record | Tracks medical information      |
| vetInfo       | Stores veterinarian information |
| inventory     | Tracks daycare inventory        |

The database design allows information to be linked between owners, dogs, veterinarians, and health records to support efficient administration and reporting.

---

## Installation and Setup

### Prerequisites

* XAMPP (Apache + MariaDB/MySQL + PHP)
* Web Browser
* `doggyDaycare.sql`

---

### 1. Install and Start XAMPP

Install XAMPP, make sure when downloading to check the box choosing the core files that include MySQL. Start the following service:

* Apache Web Server

Verify Apache is running by navigating to:

```text
http://localhost
```

You should see the XAMPP welcome page.

> Note: If MySQL will not start, verify another MySQL installation is not already running on port 3306. 

---

### 2. Create the Database

Open phpMyAdmin:

```text
http://localhost/phpmyadmin
```

### 3. Import the Database

1. Upload the `doggy_daycare.sql` database file from the Import Tab in phpMyAdmin.
2. Click **Import**.

The import will create all required tables and populate the database with sample data.

---


### 4. Deploy the Application Files

Create a folder inside XAMPP's web root:

**macOS**

```text
/Applications/XAMPP/xamppfiles/htdocs/dogdaycare
```

Copy all project files into the folder:

```text
dogdaycare/
├── dogdaycare.html
├── dogdaycareconfig.php
├── dogspage.php
├── ownerspage.php
├── staffpage.php
├── kennelpage.php
├── vetspage.php
├── index.html

```

---

### 5. Launch the Application

Open:

```text
http://localhost/dogdaycare/
```

or

```text
http://localhost/dogdaycare/dogdaycare.html
```

The Dog Daycare Administration page should load and connect to the database automatically.
