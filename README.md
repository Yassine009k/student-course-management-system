# Course Management Platform

A Laravel application for managing students and course enrollments.

## Features

* Admin Authentication
* Add Students
* Update Students
* Delete Students
* View Student Profile
* Assign Courses to Students
* Remove Courses from Students
* Middleware Check age>=18
* Many-to-Many Relationship (Students ↔ Courses)

## Technologies

* Laravel
* PHP
* MySQL
* Tailwind CSS

## Installation

```

Install dependencies:

```bash
composer install
```

Create environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Configure your database credentials in the `.env` file.

Run migrations:

```bash
php artisan migrate
```

Seed the admin account:

```bash
php artisan db:seed --class=adminsSeeder
```

Start the development server:

```bash
php artisan serve
```

## Default Admin Account

After running the seeder:

```txt
Email: admin@example.com
Password: password
```

(Change these credentials according to your AdminSeeder.)

## Database Structure

### students

* id
* nom_complet
* email
* CIN

### courses

* id
* title
* description

### course_student

* student_id
* course_id

## Author

Yassine Rafiq
