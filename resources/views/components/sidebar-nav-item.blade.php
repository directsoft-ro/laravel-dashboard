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
                <i class="fa-solid fa-caret-up dashboard-sidebar-submenu-icon-up"></i>
                <i class="fa-solid fa-caret-right dashboard-sidebar-submenu-icon-right"></i>
            </span>
        @endisset
    </a>

    @isset($items)
        <ul>
            {{ $items }}
        </ul>
    @endisset
</li>
