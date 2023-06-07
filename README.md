## My Laravel project

This is the creation of an e-commerce site


## Facility

1. Clone the project

https://github.com/rayanghomsi10/Backend_stageX2/tree/feature/front

2. Installing dependencies

You need to type the following commands in the terminal

- cd "project redirection"
- composer installation
- npm install
- npm run dev

3. Configure the database in the .env file

- DB_CONNECTION = mysql
  -DB_HOST=127.0.0.1
- DB_DATABASE = "the name of the database you are going to use"
- DB_USERNAME = "username in your database"
- BD_PASSWORD = "do not put anything if there is none"

4. Start migrations

on them with the command:

- php craft migration

5. Fill the database with the elements present in the code

on them with the command:

- php artisan db:seed

## Setup

The project uses the .env file for its configuration. Be sure to create an .env file from the .env.example file and configure the environment variables accordingly.

## Use

To launch the project, run the following command:

- php craft service

You can then access the application at http://localhost:8000.

## Some info

The default administrator information is:
- email: Ray.g@gmail.com
- password: 12345678

User information is already saved:
- email: claude.r@gmail.com
- password: 12345678
