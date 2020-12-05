# Feedback-App
Feedback App using Laravel, Bootstrap, MySQL
<br>
<p align="center"><img src="https://img.shields.io/badge/php-%23777BB4.svg?&style=for-the-badge&logo=php&logoColor=white"/> <img src="https://img.shields.io/badge/laravel%20-%23FF2D20.svg?&style=for-the-badge&logo=laravel&logoColor=white"/></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Installation Notes:
- Clone the Repository
- Go to src folder
- Run: composer install
- Run: npm install
- Make a copy of .env.example file and update the configuration as mentioned in the docker-compose.yml file
- Now from main(not a folder name) folder, run: docker-compose up
- Then use docker's shell using exec command, create a root user with hostname '%' to access the database from any user, and create an empty database
- Now again using the docker-compose's shell, migrate and seed the database

Note: Make sure to configure the container & .env file properly and also configure the database and user inside the mysql container.
Feel free to reach out to me on discord for any query: [M0N573R#4557]
