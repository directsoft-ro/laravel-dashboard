<header {{ $attributes->class(['dashboard-header']) }}>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-auto">
                <button type="button" data-dashboard-toggle-sidebar>
                    <i class="fa-solid fa-bars text-muted opacity-75"></i>
                </button>
            </div>
            <div class="col">
                {{ $slot }}
            </div>
            <div class="col-auto">
                @if (isset($right))
                    {{ $right }}
                @endif
            </div>
        </div>
    </div>
</header>
