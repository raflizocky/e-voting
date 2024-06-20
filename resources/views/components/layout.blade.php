<!DOCTYPE html>
<html lang="en">

<x-header>{{ $title }}</x-header>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard"
                aria-label="E-Voting Dashboard">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-vote-yea fa-2x text-white"></i>
                </div>
                <div class="sidebar-brand-text mx-3 text-white">E-Voting</div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <ul class="nav flex-column">
                <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="/dashboard">
                        <i class="fas fa-fw fa-chart-area fa-lg text-white"></i>
                        <span class="sidebar-text text-white">Dashboard</span>
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading text-white">
                User Data
            </div>

            <!-- Nav Item - Candidates -->
            <li class="nav-item {{ request()->is('candidate') ? 'active' : '' }}">
                <a class="nav-link" href="/candidate">
                    <i class="fas fa-users fa-lg text-white"></i>
                    <span class="sidebar-text text-white">Candidates</span>
                </a>
            </li>

            <!-- Nav Item - Voter -->
            <li class="nav-item {{ request()->is('voters') ? 'active' : '' }}">
                <a class="nav-link" href="/voters">
                    <i class="fas fa-person-booth fa-lg text-white"></i>
                    <span class="sidebar-text text-white">Voters</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading text-white">
                Manage
            </div>

            <!-- Nav Item - Admin -->
            <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-user-lock fa-lg text-white"></i>
                    <span class="sidebar-text text-white">Admin</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0 text-white" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <x-topbar></x-topbar>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    {{ $slot }}
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <x-footer></x-footer>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</body>

</html>
