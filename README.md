<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# IFChat API

## Disusun Oleh

1. Nur Ali Arfan (3337210033)
2. Ibrahim (3337220054)
3. Salsabila Firdausiah Ramadani (3337220017)
4. Nasywa Putri Khairunnisaa (3337220044)
5. Hanny Destian Marzuliyanti (3337220057)
6. Farrah Safira (3337220079)
7. Julkifli (33337210026)
8. Firmansyah Sutan Wahyu Prakosa (3337210030)
9. Ageng Parikesit Sugiana (3337210005)
10. Mohamad Restu Zikri Novdian (3337210007)
11. Fatwaraga Rafsanjani (3337210031)
12. Mochammad ahnaf hilmi zahran (3337210020)

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.1-blue.svg)](https://www.php.net/releases/8_1_0.php)
[![Laravel Version](https://img.shields.io/badge/laravel-%5E10.0-red.svg)](https://laravel.com/docs/10.x)


## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Endpoints](#endpoints)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Features

- Provide well made Landing Page in **'/'** path
- Manage Users data for IFchat Application in **'/api/users/'** path
- Manage Messages data for IFchat Application **'/api/messages/'** path

## Requirements

- PHP >= 8.1
- Composer
- Laravel >= 10.0
- Other dependencies in composer.json

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/your-repository.git
   ```
2. Change into project directory
    ```bash
    cd IFCHAT_API
    ```
3. install dependencies
    ```bash
    composer install
    ```
4. Copy the '.env.example' file and configure your environment variables
    ```bash
    cp .env.example .env
    ```
5. Generate Application Key
    ```bash
    php artisan key:generate
    ```
6. Run Migration
    ```bash
    php artisan migrate
    ```

## Configuration

To configure laravel API, follow these steps:

- Open the **'.env'** file and set the database connection details.
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

## Usage

To use this laravel API in your localhost, follow these steps:

1. Ensure that your database is set up and configured correctly
2. Run the laravel development server
    ```bash
    php artisan serve
    ```
3. Visit the [Landing Page](http://localhost:8000/)
4. Explore the **/api/users** and **/api/messages** endpoints for user and message-related functionalities.

## Endpoints

**'/api/users/'**
- **GET /api/users** : Retrive a list of users
- **GET /api/users/username/{username}** : Retrive details of spesific username
- **POST /api/users** : Create a new user
- **PUT /api/users/username/{username}** : Update information for spesific username
- **DELETE /api/users/username/{username}** : Delete a user

**'/api/messages'**
- **GET /api/messages** : Retrieve a list of messages
- **POST /api/messages/** : Create new messages

## License

This Project is licensed under the MIT License - see the [License](LICENSE) file for details.
