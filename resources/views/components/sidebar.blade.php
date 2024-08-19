<aside {{ $attributes->class(['dashboard-sidebar']) }}>
    <div class="dashboard-sidebar-header">
        @if (isset($header))
            {{ $header }}
        @endif
    </div>
    <div class="dashboard-sidebar-body">
        {{ $slot }}
    </div>
</aside>

<div data-dashboard-sidebar-back></div>
