@props([
    'href' => '#',
    'active' => false,
    'classActive' => 'active',
    'linkClass' => null,
])
<li {{ $attributes->class(['dashboard-sidebar-menu', $classActive => $active]) }}>
    <a href="{{ $href }}" class="d-flex align-items-center justify-content-between {{ $linkClass ? ' ' . $linkClass : '' }}">
        <span class="d-flex align-items-center">
            @isset($icon)
                <span class="dashboard-sidebar-icon me-2">
                    {{ $icon }}
                </span>
            @endisset
            {{ $slot }}
        </span>
        @isset($items)
            <span class="dashboard-sidebar-submenu-icons">
                <x-dashboard::icons.caret-up class="dashboard-sidebar-submenu-icon-up" />
                <x-dashboard::icons.caret-right class="dashboard-sidebar-submenu-icon-right" />
            </span>
        @endisset
    </a>

    @isset($items)
        <ul>
            {{ $items }}
        </ul>
    @endisset
</li>
