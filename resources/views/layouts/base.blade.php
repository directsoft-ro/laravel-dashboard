<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"{!! config('dashboard.dark_mode') ? ' data-bs-theme="dark"' : '' !!}>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
<link href="{{ mix('css/dashboard.css', 'vendor/dashboard') }}" rel="stylesheet" />
@stack('dashboard_head')
</head>
<body>
    @yield("base_content")
    <script src="{{ mix('js/dashboard.js', 'vendor/dashboard') }}" async></script>
    @stack('dashboard_footer')
</body>
</html>
