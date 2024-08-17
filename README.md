# Laravel Dashboard

- [Installation](#installation)
- [Basic layout](#layout)
- [Sidebar component](#sidebar-component)
- [Customize colors](#customize-colors)

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

## Layout

Create your layout page

### Empty layout

```blade
<!-- Example: layouts/app.blade.php -->

@extends('dashboard::layouts.app')

@section('dashboard_content')
    <!-- You content here -->
@endsection
```

### Layout with Header & Sidebar

```blade
<!-- Example: layouts/app.blade.php -->

@extends('dashboard::layouts.app')

@section('dashboard_content')
    <x-dashboard::header></x-dashboard::header>
    <x-dashboard::sidebar></x-dashboard::sidebar>
    <x-dashboard::main-content>
        @yield('app_content')
    </x-dashboard::main-content>
@endsection
```

## Sidebar component

```blade
<x-dashboard::sidebar>
    <x-slot:header>
        <a href="{{ url('/') }}">AppName</a>
    </x-slot:header>

    <!-- Sidebar body: for example navigation -->
</x-dashboard::sidebar>
```

## Sidebar menu

Simple menu item

```blade
<x-dashboard::sidebar-nav>
    <x-dashboard::sidebar-nav-item href="/" :active="request()->routeIs('home')">
        {{ __('Dashboard') }}
    </x-dashboard::sidebar-nav-item>
</x-dashboard::sidebar-nav>
```

Menu item with icon

```blade
<x-dashboard::sidebar-nav>
    <x-dashboard::sidebar-nav-item href="{{ route('home') }}" :active="request()->routeIs('home')">
        <x-slot:icon>
            <!-- Your SVG icon -->
        </x-slot:icon>
        {{ __('Dashboard') }}
    </x-dashboard::sidebar-nav-item>
</x-dashboard::sidebar-nav>
```

Menu item with submenu

```blade
<x-dashboard::sidebar-nav>
    <x-dashboard::sidebar-nav-item href="#" :active="request()->routeIs('users.*', 'locations.*')">
        {{ __('Settings') }}

        <x-slot:items>
            <x-dashboard::sidebar-nav-item href="{{ route('users.index') }}" :active="request()->routeIs('users.*')">
                {{ __('Users') }}
            </x-dashboard::sidebar-nav-item>
            <x-dashboard::sidebar-nav-item href="{{ route('locations.index') }}" :active="request()->routeIs('locations.*')">
                {{ __('Locations') }}
            </x-dashboard::sidebar-nav-item>
        </x-slot:items>
    </x-dashboard::sidebar-nav-item>
</x-dashboard::sidebar-nav>
```

## Customize colors

```css
:root {
    /* App Header */
    --ds-white: #fff;
    --ds-black: #000;
    --ds-header-height: 60px;
    --ds-header-bg: #fff;
    --ds-header-border-color: #ccc;

    /* App Sidebar */
    --ds-sidebar-font-size: 0.9rem;
    --ds-sidebar-width: 260px;
    --ds-sidebar-bg: #0f172a;
    --ds-sidebar-color: #fff;
    --ds-sidebar-padding-x: 1rem;
    --ds-sidebar-border-color: #16213d;
    --ds-sidebar-back-bg: rgba(15,23,42,.3);
    --ds-sidebar-nav-color: hsla(0,0%,100%,.7);
    --ds-sidebar-nav-active-color: var(--ds-white);
    --ds-sidebar-nav-active-bg: hsla(0,0%,100%,.12);
}
```