## LUS - Laravel URL Shortener

LUS is a URL shortener app built with Laravel 12 & Blade. 

## Table of Contents

- [About](#about)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Screenshots](#screenshots)

## About

LUS is a modern, fast, and secure URL shortener application built with **Laravel 12** and **Blade**. It allows users to shorten long URLs, manage links, and track usage with a clean and simple interface.

## Tech Stack

- **Backend:** Laravel 12
- **Frontend:** Blade
- **Database:** SQLite
- **Styling:** Tailwind CSS

## Installation

Follow these steps to set up the project locally.

#### 1. Clone the Repository

`git clone https://github.com/mertbag96/lus.git`

#### 2. Install PHP Dependencies

- `cd lus`
- `composer install`

#### 3. Setup Environment File

`cp .env.example .env`

#### 4. Generate the Application Key

`php artisan key:generate`

#### 5. Run Database Migrations

`php artisan migrate`

#### 6. Install NPM Dependencies

`npm install`

#### 7. Run Vite Development Server

`npm run dev`

Assuming you use Laravel Herd, you can check the project by visiting the `https://lus.test` URL. If you do not use Laravel Herd, apply the last step below:

#### 8. Start the Application

`php artisan serve`

Your project will be started at `http://127.0.0.1:8000`.

## Screenshots

![Landing Page 1](https://github.com/mertbag96/lus/blob/main/public/landing-1.png)

![Landing Page 2](https://github.com/mertbag96/lus/blob/main/public/landing-2.png)
