<p align="center"><img src="https://i.ibb.co/dP0vd11/cavite-state-university-logo.png" alt="cavite-state-university-logo" width="400"  border="0"></p>

# Getting Started

## About CavSU Online Program

CavSU is a web-based platform that offers free Open Online Learning such as short courses and webinars from Instructors and Professors of Cavite State University - Carmona Campus. The main objective of the system is to provide an effective and efficient way to deliver education and training at the learner’s own space and time.

Extension Services:
- To be follow
- To be follow
- To be follow


## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Alternative installation is possible without local dependencies relying on [Docker](#docker). 

Requirements:  PHP8, COMPOSER, NODEJS (If no existing xampp,  install the xampp version 8 then install composer from getcomposer.org)

Clone the repository

    git clone https://github.com/Cavite-State-University-Carmona-IT/cavsu-carmona-online-program.git

Switch to the repo folder

    cd cavsu-carmona-online-program

Install all the dependencies using composer

    composer install

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Install all Dev dependencies 

    npm install

Run to compile assets (mix)

    npm run dev

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

If you encounter an error "No application encryption key has been specified. Your app key is missing". Please click the "Generate App Key" button.

## About the Developer

Collaboration of 4th year students at Cavite State University.
