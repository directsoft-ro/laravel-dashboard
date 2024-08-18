# Layout

Create your layout page

Empty layout

```blade
<!-- Example: layouts/app.blade.php -->

@extends('dashboard::layouts.app')

@section('dashboard_content')
    <!-- You content here -->
@endsection
```

Layout with Header & Sidebar

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