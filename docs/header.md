# Header component

Basic component

```blade
<x-dashboard::header>
    <!-- Content -->
</x-dashboard::header>
```

Right slot content

```blade
<x-dashboard::header>
    <x-slot:right>
        <!-- Content -->
    </x-slot:right>
</x-dashboard::header>
```

Example header

```blade
<x-dashboard::header>
    <x-slot:right>
        <div class="d-flex">
            <div class="w-50-px h-60-px d-flex align-items-center justify-content-center">
                <a href="#" class="w-40-px h-40-px text-body d-flex border text-decoration-none d-flex align-items-center justify-content-center rounded-circle bg-gray-500">
                    <i class="fa-regular fa-envelope"></i>
                </a>
            </div>
            <div class="w-50-px h-60-px d-flex align-items-center justify-content-center">
                <a href="#" class="w-40-px h-40-px text-body d-flex border text-decoration-none d-flex align-items-center justify-content-center rounded-circle bg-gray-500">
                    <i class="fa-regular fa-bell"></i>
                </a>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle w-50-px h-60-px border-0 bg-transparent d-flex align-items-center justify-content-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="w-40-px h-40-px d-flex border d-flex align-items-center justify-content-center rounded-circle bg-gray-500">
                        IS
                    </div>
                </button>
                <ul class="dropdown-menu p-2">
                    <li>
                        <div class="alert alert-primary py-2">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="fw-bold">John Doe</div>
                                    <div class="small">Administrator</div>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn-close" data-bs-toggle="dropdown"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="dropdown-item py-2" href="#">
                            <i class="fa-regular fa-user w-30-px"></i>
                            {{ __('My profile') }}
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item py-2" href="#">
                            <i class="fa-solid fa-gear w-30-px"></i>
                            {{ __('Settings') }}
                        </a>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item py-2">
                            <i class="fa-solid fa-power-off w-30-px"></i>
                            {{ __('Logout') }}
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </x-slot:right>
</x-dashboard::header>
```