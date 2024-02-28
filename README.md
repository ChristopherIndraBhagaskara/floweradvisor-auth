# Laravel 5 Auth and Landing Page Web Application

This project is a simple web application built with Laravel 5, offering authentication functionality including login and registration, along with a basic landing page.

## Features

- User authentication (login and registration)
- Basic landing page

## Requirements

- PHP >= 5.4, PHP < 7
- Composer
- Laravel 5.x requirements ([check here](https://laravel.com/docs/5.0#server-requirements))

## Installation

1. Clone the repository to your local machine:

   ```
   git clone https://github.com/your_username/your_repository.git
   ```

2. Navigate to the project directory:

   ```
   cd your_repository
   ```

3. Install Composer dependencies:

   ```
   composer install
   ```

4. Copy the `.env.example` file to `.env`:

   ```
   cp .env.example .env
   ```

5. Generate the application key:

   ```
   php artisan key:generate
   ```

6. Configure your database settings in the `.env` file:

   ```
   DB_HOST=127.0.0.1
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

## Usage

To run the application locally, use the built-in PHP server:

Access the application in your web browser at `http://localhost:8000`.

## Contributing

Contributions are welcome! If you find any bugs or would like to suggest new features, please open an issue or submit a pull request.
