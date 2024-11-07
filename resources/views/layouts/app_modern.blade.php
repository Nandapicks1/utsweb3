<!DOCTYPE html>
<!-- saved from url=(0096)file:///C:/Users/Administrator/Downloads/Modernize-bootstrap-free-main/src/html/sample-page.html -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nanda Klinik</title>
    <link rel="shortcut icon" type="image/png" href="/modern/src/assets/images/logos/favicon.png">
    <link rel="stylesheet" href="/modern/src/assets/css/styles.min.css">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="/modern/src/html/index.html" class="text-nowrap logo-img">
                        <img src="/modern/src/assets/images/logos/logo.png" width="180" alt="">
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="init">
                    <div class="simplebar-wrapper selected" style="margin: 0px -24px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask selected">
                            <div class="simplebar-offset selected" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper selected" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                    <div class="simplebar-content selected" style="padding: 0px 24px;">
                                        <ul id="sidebarnav">
                                            <li class="nav-small-cap">
                                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                                <span class="hide-menu">Menu Utama</span>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link {{ request()->is('home') ? 'active' : '' }}" href="/home" aria-expanded="false">
                                                    <span>
                                                        <i class="ti ti-layout-dashboard"></i>
                                                    </span>
                                                    <span class="hide-menu">Beranda</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link {{ request()->is('pasien*') ? 'active' : '' }}" href="/pasien" aria-expanded="false">
                                                    <span>
                                                        <i class="ti ti-user"></i>
                                                    </span>
                                                    <span class="hide-menu">Data Pasien</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link {{ request()->is('laporan-pasien') ? 'active' : '' }}" href="/laporan-pasien/create" aria-expanded="false">
                                                    <span>
                                                        <i class="ti ti-user"></i>
                                                    </span>
                                                    <span class="hide-menu">Laporan Data Pasien</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link {{ request()->is('laporan-daftar') ? 'active' : '' }}" href="/laporan-daftar/create" aria-expanded="false">
                                                    <span>
                                                        <i class="ti ti-user"></i>
                                                    </span>
                                                    <span class="hide-menu">Laporan data pendaftaran</span>
                                                </a>
                                            </li>


                                            <li class="nav-small-cap">
                                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                                <span class="hide-menu">AUTH</span>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="/modern/src/html/authentication-login.html" aria-expanded="false">
                                                    <span>
                                                        <i class="ti ti-login"></i>
                                                    </span>
                                                    <span class="hide-menu">Login</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="/modern/src/html/authentication-register.html" aria-expanded="false">
                                                    <span>
                                                        <i class="ti ti-user-plus"></i>
                                                    </span>
                                                    <span class="hide-menu">Register</span>
                                                </a>
                                            </li>



                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: auto; height: 888px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar" style="height: 315px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./modern/src/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">{{ Auth::user()->name }}</p>
                                        </a>
                                        <a href="#" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" class="btn btn-outline-primary mx-3 mt-2 d-block">Log Out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                @include('flash::message')
                @yield('content')
            </div>
        </div>
    </div>
    <script src="/modern/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/modern/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/modern/src/assets/js/sidebarmenu.js"></script>
    <script src="/modern/src/assets/js/app.min.js"></script>
    <script src="/modern/src/assets/libs/simplebar/dist/simplebar.js"></script>


</body>
</html>
