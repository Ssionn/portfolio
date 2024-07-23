# Portfolio

[![Laravel Forge Site Deployment Status](https://img.shields.io/endpoint?url=https%3A%2F%2Fforge.laravel.com%2Fsite-badges%2F7fed714d-0598-47d3-97e5-2347b830fafc&style=for-the-badge)](https://forge.laravel.com/servers/826724/sites/2417168)

## Overview

This project is a personal developer portfolio showcasing my skills, projects, and professional information. It's built with Laravel and integrates with the GitHub API to display real-time statistics for my repositories.

![image](https://github.com/user-attachments/assets/243dffbe-8dbc-4b6e-bf03-e3564a6facc6)


## Features

- Dynamic project cards with GitHub repository statistics
- Responsive design for optimal viewing on various devices
- Animated content reveal on scroll
- Integration with GitHub API for live project data
- Server-side rendering for improved performance and SEO

## Technologies Used

- Laravel 10.x
- PHP 8.x
- Tailwind CSS
- JavaScript (Vanilla JS for animations)
- GitHub API

## Prerequisites

- PHP 8.x
- Composer
- Node.js and npm
- A GitHub account and Personal Access Token

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/ssionn/portfolio.git
   cd portfolio
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Install JavaScript dependencies:
   ```
   npm install
   ```

4. Copy the `.env.example` file to `.env` and configure your environment variables:
   ```
   cp .env.example .env
   ```

5. Generate an application key:
   ```
   php artisan key:generate
   ```

6. Configure your database in the `.env` file and run migrations:
   ```
   php artisan migrate
   ```

7. Set up your GitHub Personal Access Token in the `.env` file:
   ```
   GITHUB_TOKEN=your_token_here
   ```

## Usage

1. To run the application locally:
   ```
   php artisan serve
   ```

2. Compile assets:
   ```
   npm run dev
   ```

3. Access the application at `http://localhost:8000`

## Deployment

This project can be deployed to any PHP-compatible hosting environment. Ensure that your web server is configured to serve Laravel applications.

1. Set up your production environment variables in the `.env` file on your server.
2. Ensure all dependencies are installed on the production server.
3. Configure your web server to point to the `public` directory of the project.
4. Set appropriate permissions for storage and cache directories.

Refer to the Laravel documentation for detailed deployment instructions for your specific hosting environment.

## Customization

- Update the `projects` array in `DatabaseSeeder.php` to add or modify your showcased projects. (Panel coming soon)
- Modify the Blade templates in `resources/views` to change the layout and content of your portfolio.
- Adjust the Tailwind classes in the HTML to customize the styling.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
