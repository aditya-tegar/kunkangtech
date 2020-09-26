<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="{{ route('home') }}" class="brand-link d-flex align-items-center justify-content-center">
        <span class="brand-text font-weight-light"><i class="nav-icon fas fa-home"></i>
            {{ config('', 'Kumkang') }}</span>
    </a> --}}
    <a href="{{ route('home') }}" class="brand-link d-flex align-items-center justify-content-center">
    <span class="brand-text font-weight-light"> <img src="{{ asset('/img/KK.png') }}" alt="KK" width="200px;">
            {{ config('', ' ') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p> Visi Misi </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('barang.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p> Data Barang </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customer.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p> Data Customer </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('order.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p> Data Order </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('laporan') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p> Laporan </p>
                    </a>
                </li>
                {{-- <li class="nav-header">EXAMPLES</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            CRUD
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('crud') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('crud.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('crud.edit') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Edit</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>