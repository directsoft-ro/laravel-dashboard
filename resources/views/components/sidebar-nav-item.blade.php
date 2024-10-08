@props([
    'href' => '#',
    'active' => false,
    'classActive' => 'active',
    'linkClass' => null,
    'target' => null,
])
<li {{ $attributes->class(['dashboard-sidebar-menu', $classActive => $active]) }}>
    <a href="{{ $href }}" class="dashboard-sidebar-nav-item {{ $linkClass ? ' ' . $linkClass : '' }}"{!! $target ? ' target="'.$target.'"' : '' !!}>
        <span class="dashboard-sidebar-item-content">
            @isset($icon)
                <span class="dashboard-sidebar-icon">
                    {{ $icon }}
                </span>
            @endisset
            {{ $slot }}
        </span>
        @isset($items)
            <span class="dashboard-sidebar-submenu-icons">
                <span class="dashboard-sidebar-submenu-icon-up">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="8">
                        <path
                            d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                    </svg>
                </span>
                <span class="dashboard-sidebar-submenu-icon-right">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" width="8">
                        <path
                            d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                    </svg>
                </span>
            </span>
        @endisset
    </a>

    @isset($items)
        <ul>
            {{ $items }}
        </ul>
    @endisset
</li>
