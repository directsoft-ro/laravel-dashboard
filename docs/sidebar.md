# Sidebar component

```blade
<x-dashboard::sidebar>
    <x-slot:header>
        <a href="{{ url('/') }}">AppName</a>
    </x-slot:header>

    <!-- Sidebar body: for example navigation -->
</x-dashboard::sidebar>
```

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