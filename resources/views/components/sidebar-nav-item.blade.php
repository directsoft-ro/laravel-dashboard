@props([
    'href' => '#',
    'active' => false,
    'classActive' => 'active',
    'linkClass' => null,
])
<li {{ $attributes->class(['dashboard-sidebar-menu', 'active' => $active]) }}>
    <a href="{{ $href }}" class="d-flex align-items-center justify-content-between {{ $active ? $classActive : '' }}{{ $linkClass ? ' ' . $linkClass : '' }}">
        <span class="d-flex align-items-center">
            @isset($icon)
                <span class="dashboard-sidebar-icon me-2">
                    {{ $icon }}
                </span>
            @endisset
            {{ $slot }}
        </span>
        @isset($items)
            <span>
                <x-dashboard::icons.caret-up width="14" class="opacity-50 dashboard-sidebar-icon-up" />
                <x-dashboard::icons.caret-down width=14 class="opacity-50 dashboard-sidebar-icon-down" />
            </span>
        @endisset
    </a>

    @isset($items)
        <ul>
            {{ $items }}
        </ul>
    @endisset
</li>
