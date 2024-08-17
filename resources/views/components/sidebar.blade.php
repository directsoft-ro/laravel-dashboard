<aside {{ $attributes->class(['dashboard-sidebar']) }}>
    <div class="dashboard-sidebar-header">
        @if (isset($header))
            {{ $header }}
        @endif
    </div>
    {{ $slot }}
</aside>

@push('footer')
    <div class="dashboard-sidebar-back"></div>
@endpush
