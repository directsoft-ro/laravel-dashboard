# Laravel Dashboard

Bootstrap 5 + Font Awesome 6

- [Installation](#installation)
- [Basic layout](docs/layout.md)
- [Header component](docs/header.md)
- [Sidebar component](docs/sidebar.md)
- [Customize colors](docs/colors.md)

## Installation

```sh
composer require directsoft-ro/laravel-dashboard
```

Publish configuration & assets

```sh
php artisan vendor:publish --provider="Directsoft\Laravel\Dashboard\DashboardServiceProvider" --force
```

Publish only assets

```sh
php artisan vendor:publish --provider="Directsoft\Laravel\Dashboard\DashboardServiceProvider" --tag=public --force
```
