<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position:fixed;">
    <a href="#" target="_blank" class="brand-link">
{{--        <img src="#" alt="max" class="brand-image " style="opacity: .8">--}}
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <i class="fas fa-user-tie"></i>
            </div>
            <div class="info">
                <a href="#" class="d-block">Hello, {{ Auth::user()->name }}!</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Home
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link active">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Users</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.lardi') }}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lardi</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
