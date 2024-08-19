# Layout

Add styles and scripts to your master layout

```blade
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @dashboardStyles
</head>

<body>
    {{-- ... --}}

    @dashboardScripts
</body>

</html>
```

Layout with Header & Sidebar

```blade
<x-dashboard::header></x-dashboard::header>
<x-dashboard::sidebar></x-dashboard::sidebar>
<x-dashboard::main-content>
    {{-- ... --}}
</x-dashboard::main-content>
```