#README

This document will explain how to setup and run the project.

##Database

Please ensure that an SQL connection is running locally with an empty database named 'tech-toucan' on port 3306, I tested this locally using XAMPP. Alternatively, edit the database configuration in the .env file to point towards a different connection where a an empty database named 'tech-toucan' has been setup. Editing the environment variables will require the project to be rebuilt, please do this by running the command 'npm run development' in the projects directory.

##Migrations

Once the database has been setup, please run the command 'php artisan migrate' to create all the tables in the database. 

##Project

Once the backend for the project is in place you can start the project by running the command 'php artisan serve' in the projects directory. This will start the Laravel development server where you can use the project.


