<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('datasensor.dashboard') }}">
                <div class="sidebar-brand-text mx-3">Monitoring Atap</div>
            </a>
            <!-- Sidebar - Brand -->
            {{-- <a class="d-flex align-items-center justify-content-center" >
                <div class="sidebar-brand-icon rotate-n-0">
                    <i class="fas fa-campground"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Monitoring Atap</div>
            </a> --}}

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('datasensor.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                --
            </div> --}}


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('datasensor.grafik') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Grafik</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('datasensor.tabel') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Table</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                --
            </div> --}}

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link " href="{{ route('analisis') }}">
                    <i class="fas fa-fw fa-calculator"></i>
                    <span>Analisis Preventive Maintenance</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('basispengetahuan.index') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Basis Pengetahuan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profil') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profil</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->
